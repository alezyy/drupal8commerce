<?php

namespace Drupal\excel_libxl\Encoder;

use Drupal\Component\Serialization\Exception\InvalidDataTypeException;
use Drupal\Component\Utility\Html;
use Symfony\Component\Serializer\Encoder\EncoderInterface;

/**
 * Adds XLSX encoder support via LibXL library for the Serialization API.
 */
class XlsxLibXl implements EncoderInterface {

  /**
   * The format that this encoder supports.
   *
   * @var string
   */
  protected static $format = 'xlsx';

  /**
   * Format to write XLS files as.
   *
   * @var string
   */
  protected $xlsFormat = 'Excel2007';

  /**
   * Constructs an XLS encoder.
   *
   * @param string $xls_format
   *   The XLS format to use.
   */
  public function __construct($xls_format = 'Excel2007') {
    $this->xlsFormat = $xls_format;
  }

  /**
   * {@inheritdoc}
   */
  public function encode($data, $format, array $context = []) {
    switch (gettype($data)) {
      case 'array':
        // Nothing to do.
        break;

      case 'object':
        $data = (array) $data;
        break;

      default:
        $data = [$data];
        break;
    }

    try {
      // Instantiate a new excel object.
      $xlBook = new \ExcelBook(NULL, NULL, TRUE);
      $xlBook->setLocale('UTF-8');
      $sheet = $xlBook->addSheet('Worksheet');
      $start_row = 0;
      // Set headers.
      $this->setHeaders($xlBook, $sheet, $data, $context, $start_row);
      // Set the data.
      $this->setData($xlBook, $sheet, $data, $start_row);

      if (!empty($context['views_style_plugin']->options['xls_settings'])) {
        $this->setSettings($context['views_style_plugin']->options['xls_settings']);
      }
      return $xlBook->save();
    }
    catch (\Exception $e) {
      throw new InvalidDataTypeException($e->getMessage(), $e->getCode(), $e);
    }
  }

  /**
   * {@inheritdoc}
   */
  public function supportsEncoding($format) {
    return $format === static::$format;
  }

  /**
   * Set sheet headers.
   *
   * @param \ExcelBook $xlBook
   *   The XLSX Book.
   * @param \ExcelSheet $sheet
   *   The worksheet to set headers for.
   * @param array $data
   *   The data array.
   * @param array $context
   *   The context options array.
   * @param int $start_row
   *   The start row.
   */
  protected function setHeaders(\ExcelBook &$xlBook, \ExcelSheet &$sheet, array $data, array $context, &$start_row) {
    // TODO: Add configuration for table header.
    $font = $xlBook->addFont();
    $font->color(\ExcelFormat::COLOR_WHITE);
    $font->bold(TRUE);
    $font->size(12);
    $format = $xlBook->addFormat();
    $format->borderStyle(\ExcelFormat::BORDERSTYLE_THIN);
    $format->fillPattern(\ExcelFormat::FILLPATTERN_SOLID);
    $format->patternForegroundColor(\ExcelFormat::COLOR_OCEANBLUE_CF);
    $format->horizontalAlign(\ExcelFormat::ALIGNH_CENTER);
    $format->setFont($font);
    $c = 0;
    // Extract headers from the data.
    $headers = $this->extractHeaders($data, $context);
    foreach ($headers as $column => $header) {
      $sheet->write($start_row, $c, $this->formatValue($header), $format);
      // TODO: Make this setting configurable.
      $sheet->setColWidth(0, $c, -1);
      $c++;
    }
    $start_row++;
  }

  /**
   * Set sheet data.
   *
   * @param \ExcelBook $xlBook
   *   The XLSX Book.
   * @param \ExcelSheet $sheet
   *   The worksheet to set headers for.
   * @param array $data
   *   The data array.
   * @param int $start_row
   *   The start row.
   */
  protected function setData(\ExcelBook &$xlBook, \ExcelSheet &$sheet, array $data, $start_row) {
    foreach ($data as $i => $row) {
      $column = 0;
      $format = $xlBook->addFormat();
      $format->horizontalAlign(\ExcelFormat::ALIGNH_LEFT);
      foreach ($row as $value) {
        // Since headers have been added, rows are offset here by start row.
        $sheet->write($i + $start_row, $column, $this->formatValue($value), $format);
        $column++;
      }
    }
    // TODO: Make this setting configurable.
    $sheet->setAutofitArea(0, $i, 0, $column);
  }

  /**
   * Formats a single value for a given XLSX cell.
   *
   * @param string $value
   *   The raw value to be formatted.
   *
   * @return string
   *   The formatted value.
   */
  protected function formatValue($value) {
    // @todo Make these filters configurable.
    $value = Html::decodeEntities($value);
    $value = strip_tags($value);
    $value = trim($value);

    return $value;
  }

  /**
   * Extract the headers from the data array.
   *
   * @param array $data
   *   The data array.
   * @param array $context
   *   The context options array.
   *
   * @return string[]
   *   An array of headers to be used.
   */
  protected function extractHeaders(array $data, array $context) {
    $headers = [];
    if ($first_row = reset($data)) {
      /** @var \Drupal\views\ViewExecutable $view */
      $view = $context['views_style_plugin']->view;
      $fields = $view->field;
      foreach ($first_row as $key => $value) {
        $headers[] = !empty($fields[$key]->options['label']) ? $fields[$key]->options['label'] : $key;
      }
    }

    return $headers;
  }

  /**
   * Set XLS settings from the Views settings array.
   *
   * @param array $settings
   *   An array of XLS settings.
   */
  protected function setSettings(array $settings) {
    $this->xlsFormat = $settings['xls_format'];
  }

}
