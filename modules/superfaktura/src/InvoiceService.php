<?php

namespace Drupal\superfaktura;

use Drupal\commerce_order\Adjustment;
use Drupal\commerce_order\Entity\Order;
use Drupal\commerce_order\Entity\OrderItemInterface;
use Drupal\commerce_price\Calculator;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Logger\LoggerChannelFactory;
use Drupal\Core\Logger\LoggerChannelFactoryInterface;

/**
 * Class InvoiceService.
 *
 * @package Drupa\superfaktura
 */
class InvoiceService {

  /**
   * Drupal\Core\Config\ConfigFactory definition.
   *
   * @var \Drupal\Core\Config\ConfigFactory
   */
  protected $configFactory;

  /**
   * LoggerChannelInterface object.
   *
   * @var \Drupal\Core\Logger\LoggerChannelInterface
   */
  protected $logger;

  /**
   * InvoiceService constructor.
   *
   * @param \Drupal\Core\Config\ConfigFactoryInterface $configFactory
   *   Superfaktura settings.
   * @param \Drupal\Core\Logger\LoggerChannelFactoryInterface $loggerFactory
   *   Logger.
   */
  public function __construct(ConfigFactoryInterface $configFactory, LoggerChannelFactoryInterface $loggerFactory) {
    $this->configFactory = $configFactory->get('superfaktura.settings');
    $this->logger = $loggerFactory->get('superfaktura');
  }

  /**
   * Set Client data for Superfaktura API.
   *
   * @param \Drupal\commerce_order\Entity\Order $order
   *   Created Order.
   *
   * @return array
   *   Client data.
   */
  public function addClient(Order $order) {
    $customer_profiles = $order->getBillingProfile()->get('address')->getValue();
    $customer_profile = reset($customer_profiles);

    $client = [
      'name' => $customer_profile['given_name'] . ' ' . $customer_profile['family_name'],
      'email' => $order->getEmail(),
      'address' => $customer_profile['address_line1'],
      'city' => $customer_profile['locality'],
      'zip' => $customer_profile['postal_code'],
      'country_iso_id' => $customer_profile['country_code'],
    ];

    return $client;
  }

  /**
   * Compute Invoice due date from config.
   *
   * @param \Drupal\commerce_order\Entity\Order $order
   *   Created Order.
   *
   * @return mixed
   *   Due date in seconds.
   */
  public function computeDueDate(Order $order) {
    $due_date = $order->getPlacedTime() + (3600 * 24 * $this->configFactory->get('maturity'));

    return $due_date;
  }

  /**
   * Set Invoice data for Superfaktura API.
   *
   * @param \Drupal\commerce_order\Entity\Order $order
   *   Created Order.
   *
   * @todo Set 'already_paid' parameter dynamically based on payment type
   *
   * @return array
   *   Invoice data.
   */
  public function addInvoice(Order $order) {
    $invoice = [
      'name' => $this->configFactory->get('invoice_name_prefix') . $order->getOrderNumber(),
      'variable' => sprintf("%'.08d", $order->getOrderNumber()),
      'constant' => $this->configFactory->get('constant'),
      'specific' => $this->configFactory->get('specific'),
      'already_paid' => FALSE,
      'invoice_currency' => $order->getTotalPrice()->getCurrencyCode(),
      'invoice_no_formatted' => '',
      'created' => date('Y-m-d', $order->getPlacedTime()),
      'due' => date('Y-m-d', $this->computeDueDate($order)),
      'comment' => '',
      'type' => 'regular',
    ];

    return $invoice;
  }

  /**
   * Set Order Item data for Superfaktura API.
   *
   * @param \Drupal\commerce_order\Entity\OrderItemInterface $item
   *   Order item.
   *
   * @return array
   *   Order Item data.
   *
   * @todo Set 'unit' in order_item dynamically based on item type
   */
  public function addOrderItem(OrderItemInterface $item) {
    $unit_price = 0;
    $tax_rate = 0;

    // If there are no tax adjustments, then we would end up without price.
    if ($tax_rate === 0) {
      $unit_price = $item->getUnitPrice()->getNumber();
    }

    $item_adjustments = $item->getAdjustments();
    foreach ($item_adjustments as $item_adjustment) {
      if ($item_adjustment->getType() == 'tax') {
        $tax_percentage = $item_adjustment->getPercentage();
        $tax_rate = Calculator::multiply($tax_percentage, 100);

        // Calculate and round tax amount (ta)
        // and unit price without tax from order item.
        $ta_divisor = Calculator::add(100, $tax_rate);
        $ta_divide = Calculator::divide($unit_price, $ta_divisor);
        $ta_multiply = Calculator::multiply($ta_divide, $tax_rate);
        $tax_amount = Calculator::round($ta_multiply, 4, PHP_ROUND_HALF_UP);

        $unit_price = Calculator::subtract($unit_price, $tax_amount, 4);
      }
    }

    $order_item = [
      'name' => $item->getTitle(),
      'description' => '',
      'quantity' => $item->getQuantity(),
      'unit' => 'ks.',
      'unit_price' => $unit_price,
      'tax' => $tax_rate,
    ];

    return $order_item;
  }

  /**
   * Set Shipping data for Superfaktura API.
   *
   * @param \Drupal\commerce_order\Adjustment $shipping_adjustment
   *   Order shipping adjustment.
   *
   * @return array
   *   Shipping item data.
   */
  public function addShippingItem(Adjustment $shipping_adjustment) {
    $shipping = $shipping_adjustment->getAmount()->getNumber();
    $tax_percentage = $shipping_adjustment->getPercentage();
    $tax_rate = Calculator::multiply($tax_percentage, 100);

    // Calculate and round shipment tax amount (sta) from shipment price.
    $sta_divisor = Calculator::add(100, $tax_rate);
    $sta_divide = Calculator::divide($shipping, $sta_divisor);
    $sta_multiply = Calculator::multiply($sta_divide, $tax_rate);
    $shipment_tax_amount = Calculator::round($sta_multiply, 4, PHP_ROUND_HALF_UP);

    $shipping_without_tax = Calculator::subtract($shipping, $shipment_tax_amount, 4);

    $shipping_item = [
      'name' => $shipping_adjustment->getLabel(),
      'description' => '',
      'quantity' => 1,
      'unit' => 'ks.',
      'unit_price' => $shipping_without_tax,
      'tax' => $tax_rate,
    ];

    return $shipping_item;
  }

  /**
   * Create Invoice using Superfaktura API.
   *
   * @param \Drupal\commerce_order\Entity\Order $order
   *   Created Order.
   */
  public function createInvoice(Order $order) {
    $api = new \SFAPIclient($this->configFactory->get('email'), $this->configFactory->get('api_key'));
    if ($api) {
      $this->logger->info('Succesfully created Superfaktura API object.');
    }
    else {
      $this->logger->alert('Could not create the Superfaktura object');
    }

    $api->setClient($this->addClient($order));
    $api->setInvoice($this->addInvoice($order));

    /** @var \Drupal\commerce_order\Entity\OrderItemInterface $item */
    foreach ($order->getItems() as $item) {
      $api->addItem($this->addOrderItem($item));
    }

    $order_adjustments = $order->getAdjustments();
    foreach ($order_adjustments as $order_adjustment) {
      if ($order_adjustment->getType() == 'shipping') {
        $api->addItem($this->addShippingItem($order_adjustment));
      }
    }

    $response = $api->save();

    if ($response->error === 0) {
      $invoice_id = $response->data->Invoice->id;
      $this->logger->info('Invoice #@invoice was successfully created.', ['@invoice' => $invoice_id]);
      $order->set('superfaktura_invoice_id', $invoice_id);
    }
  }

}
