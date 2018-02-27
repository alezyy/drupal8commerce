<?php

namespace Drupal\Tests\commerce_mollie\Functional;

use Drupal\commerce_order\Entity\Order;
use Drupal\commerce_order\Entity\OrderType;
use Drupal\commerce_payment\Entity\Payment;
use Drupal\commerce_payment\Entity\PaymentGateway;
use Drupal\Core\Entity\Entity\EntityFormDisplay;
use Drupal\Tests\commerce\Functional\CommerceBrowserTestBase;

/**
 * Tests the checkout form that initializes a payment.
 *
 * @group commerce_mollie
 */
class MolliePaymentOffsiteFormTest extends CommerceBrowserTestBase {

  /**
   * A manual payment gateway.
   *
   * @var \Drupal\commerce_payment\Entity\PaymentGatewayInterface
   */
  protected $paymentGateway;

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = [
    'commerce_product',
    'commerce_order',
    'commerce_cart',
    'commerce_checkout',
    'commerce_payment',
    'commerce_mollie',
    'commerce_mollie_tests',
  ];

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();

    $variation = $this->createEntity('commerce_product_variation', [
      'type' => 'default',
      'sku' => strtolower($this->randomMachineName()),
      'price' => [
        'number' => '29.99',
        'currency_code' => 'USD',
      ],
    ]);

    /** @var \Drupal\commerce_product\Entity\ProductInterface $product */
    $this->product = $this->createEntity('commerce_product', [
      'type' => 'default',
      'title' => 'My product',
      'variations' => [$variation],
      'stores' => [$this->store],
    ]);

    /** @var \Drupal\commerce_order\Entity\OrderType $order_type */
    $order_type = OrderType::load('default');
    $order_type->setWorkflowId('order_default_validation');
    $order_type->save();

    /** @var \Drupal\commerce_payment\Entity\PaymentGateway $gateway */
    $gateway = PaymentGateway::create([
      'id' => 'mollie_test_gateway',
      'label' => 'Mollie',
      'plugin' => 'mollie',
    ]);
    $gateway->getPlugin()->setConfiguration([
      'mode' => 'test',
      'api_key_test' => 'test_Dfm3kc8CNcFb34xHnxwNNEyAJTteez',
      'api_key_live' => 'live_key',
      'callback_domain' => 'https://molliedevelopment.localtunnel.me',
    ]);
    $gateway->save();

    // Cheat so we don't need JS to interact w/ Address field widget.
    /** @var \Drupal\Core\Entity\Display\EntityFormDisplayInterface $customer_form_display */
    $customer_form_display = EntityFormDisplay::load('profile.customer.default');
    $address_component = $customer_form_display->getComponent('address');
    $address_component['settings']['default_country'] = 'US';
    $customer_form_display->setComponent('address', $address_component);
    $customer_form_display->save();
  }

  /**
   * Tests the off-site redirect using the POST redirect method.
   */
  public function testCheckoutWithOffsiteRedirectPost() {

    /*
     * Add a product to the cart, and proceed to Mollie.
     */
    $this->drupalGet($this->product->toUrl()->toString());
    $this->submitForm([], 'Add to cart');
    $cart_link = $this->getSession()->getPage()->findLink('your cart');
    $cart_link->click();
    $this->submitForm([], 'Checkout');
    $this->assertSession()->pageTextContains('Order Summary');
    $this->submitForm([
      'payment_information[billing_information][address][0][address][given_name]' => 'Johnny',
      'payment_information[billing_information][address][0][address][family_name]' => 'Appleseed',
      'payment_information[billing_information][address][0][address][address_line1]' => '123 New York Drive',
      'payment_information[billing_information][address][0][address][locality]' => 'New York City',
      'payment_information[billing_information][address][0][address][administrative_area]' => 'NY',
      'payment_information[billing_information][address][0][address][postal_code]' => '10001',
    ], 'Continue to review');
    $this->assertSession()->pageTextContains('Contact information');
    $this->assertSession()->pageTextContains($this->loggedInUser->getEmail());
    $this->assertSession()->pageTextContains('Payment information');
    $this->assertSession()->pageTextContains('Order Summary');
    $this->submitForm([], 'Pay and complete purchase');
    // No JS so we need to manually click the button to submit payment.
    $this->assertSession()->pageTextContains('Please wait while you are redirected to the payment server. If nothing happens within 10 seconds, please click on the button below');
    $this->submitForm([], 'Proceed to Mollie');

    /*
     * Validate return page, order- and payment-status.
     *
     * @covers
     *  onReturn() callback.
     */
    // Checkout complete messages.
    $this->assertSession()->pageTextContains('Your order number is 1. You can view your order on your account page when logged in.');
    $this->assertSession()->pageTextContains('Thank you for your payment with Mollie. We will inform you when your payment is processed. This is usually done within 24 hours.');

    /** @var \Drupal\commerce_order\Entity\Order $order */
    $order = Order::load(1);
    // Verify that the order status is 'validation'.
    $this->assertEquals('validation', $order->getState()->value);

    /** @var \Drupal\commerce_payment\Entity\Payment $payment */
    $payment = Payment::load(1);
    // Verify that a payment was created.
    $this->assertNotNull($payment);
    $this->assertEquals($payment->getAmount(), $order->getTotalPrice());
    // Verify that the payment status is 'new'.
    $this->assertEquals('authorization', $payment->getState()->value);

    /** @var \Drupal\commerce_mollie\Plugin\Commerce\PaymentGateway\Mollie $payment_gateway_plugin */
    $payment_gateway = $order->payment_gateway->entity;
    // Verify that the gateway identifier is 'mollie_test_gateway'.
    $this->assertEquals('mollie_test_gateway', $payment_gateway->id());

    /*
     * Call the onNotify a.k.a. Webhook.
     * Again validate order- and payment-status.
     *
     * @covers
     *  onNotify() callback.
     */
    $notify_url = $this->getAbsoluteUrl('/payment/notify/mollie_test_gateway');
    $post_data = ['id' => 'test_id'];
    $session = $this->getSession();
    $session->setCookie('SIMPLETEST_USER_AGENT', drupal_generate_test_ua($this->databasePrefix));
    $session->getDriver()->getClient()->request('POST', $notify_url, $post_data);

    // Force reload $order and verify status is 'completed'.
    $order = entity_load('commerce_order', 1, TRUE);
    $this->assertEquals('completed', $order->getState()->value);

    // Force reload $payment and verify status is 'capture_completed'.
    $payment = entity_load('commerce_payment', 1, TRUE);
    $this->assertEquals('capture_completed', $payment->getState()->value);

  }

}
