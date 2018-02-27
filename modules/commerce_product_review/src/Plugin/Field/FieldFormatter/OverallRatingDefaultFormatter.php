<?php

namespace Drupal\commerce_product_review\Plugin\Field\FieldFormatter;

use Drupal\commerce_price\NumberFormatterFactoryInterface;
use Drupal\Core\Annotation\Translation;
use Drupal\Core\Field\Annotation\FieldFormatter;
use Drupal\Core\Field\FieldDefinitionInterface;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Language\LanguageInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Implements the 'commerce_product_review_overall_rating_default' formatter.
 *
 * @FieldFormatter(
 *   id = "commerce_product_review_overall_rating_default",
 *   label = @Translation("Default"),
 *   field_types = {
 *     "commerce_product_review_overall_rating"
 *   }
 * )
 */
class OverallRatingDefaultFormatter extends FormatterBase implements ContainerFactoryPluginInterface, OverallRatingEmptyTextFormatterInterface {

  /**
   * The number formatter.
   *
   * @var \CommerceGuys\Intl\Formatter\NumberFormatterInterface
   */
  protected $numberFormatter;

  /**
   * Constructs a new OverallRatingDefaultFormatter object.
   *
   * @param string $plugin_id
   *   The plugin_id for the formatter.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\Core\Field\FieldDefinitionInterface $field_definition
   *   The definition of the field to which the formatter is associated.
   * @param array $settings
   *   The formatter settings.
   * @param string $label
   *   The formatter label display setting.
   * @param string $view_mode
   *   The view mode.
   * @param array $third_party_settings
   *   Any third party settings settings.
   * @param \Drupal\commerce_price\NumberFormatterFactoryInterface $number_formatter_factory
   *   The number formatter factory.
   */
  public function __construct($plugin_id, $plugin_definition, FieldDefinitionInterface $field_definition, array $settings, $label, $view_mode, array $third_party_settings, NumberFormatterFactoryInterface $number_formatter_factory) {
    parent::__construct($plugin_id, $plugin_definition, $field_definition, $settings, $label, $view_mode, $third_party_settings);

    $this->numberFormatter = $number_formatter_factory->createInstance();
    $this->numberFormatter->setMaximumFractionDigits(1);
    if ($this->getSetting('strip_trailing_zeroes')) {
      $this->numberFormatter->setMinimumFractionDigits(0);
    }
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $plugin_id,
      $plugin_definition,
      $configuration['field_definition'],
      $configuration['settings'],
      $configuration['label'],
      $configuration['view_mode'],
      $configuration['third_party_settings'],
      $container->get('commerce_price.number_formatter_factory')
    );
  }

  /**
   * {@inheritdoc}
   */
  public static function defaultSettings() {
    return [
      'strip_trailing_zeroes' => FALSE,
      'empty_text' => t('Write the first review'),
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {
    $form = [];

    $form['strip_trailing_zeroes'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Strip trailing zeroes after the decimal point.'),
      '#default_value' => $this->getSetting('strip_trailing_zeroes'),
    ];

    $form['empty_text'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Empty text'),
      '#description' => $this->t('Text displayed, if no published review exists for the given product.'),
      '#default_value' => $this->getSetting('empty_text'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $summary = [];

    if ($this->getSetting('strip_trailing_zeroes')) {
      $summary[] = $this->t('Strip trailing zeroes after the decimal point.');
    }
    else {
      $summary[] = $this->t('Do not strip trailing zeroes after the decimal point.');
    }

    if ($empty_text = $this->getSetting('empty_text')) {
      $summary[] = $this->t('Empty text: @empty_text', ['@empty_text' => $empty_text]);
    }

    return $summary;
  }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = [];
    /** @var \Drupal\commerce_product_review\Plugin\Field\FieldType\OverallRatingItem $item */
    foreach ($items as $delta => $item) {
      $elements[$delta] = [
        '#markup' => sprintf('%s (%s)', $this->numberFormatter->format($item->score), $item->count),
        '#cache' => [
          'contexts' => [
            'languages:' . LanguageInterface::TYPE_INTERFACE,
            'country',
          ],
        ],
      ];
    }

    return $elements;
  }

  /**
   * {@inheritdoc}
   */
  public function getEmptyText() {
    return $this->getSetting('empty_text');
  }

}
