<?php

namespace Drupal\commerce_mollie_tests\Services;

use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Mock class.
 *
 * This Mock passed every call to the original Mollie_API_Client except
 * overridden methods.
 *
 * Methods are overridden when they need a connection to the Mollie-server.
 */
class MollieApiMock {

  /**
   * MollieApiMock constructor.
   */
  public function __construct() {
    $this->original_api_object = new \Mollie_API_Client();
  }

  /**
   * Magic method that passes every _call to this same object.
   *
   * @param string $method
   *   The method to be called.
   * @param mixed $args
   *   The parameters.
   */
  public function __call($method, $args) {
    call_user_func_array([$this->original_api_object, $method], $args);
  }

  /**
   * Magic method that passes every _get to the parent object.
   *
   * @param string $name
   *   The property to be called.
   *
   * @return $this|string
   *   Return the parameter
   */
  public function __get($name) {

    // Overrides the 'id' parameter.
    if ($name === 'id') {
      return 'test_id';
    }
    // Overrides the 'status' parameter.
    if ($name === 'status') {
      return 'capture_completed';
    }
    // Pass any other __get to the parent object.
    return $this;
  }

  /**
   * Overrides the getPaymentUrl() method.
   *
   * @return string
   *   The overridden post-url.
   */
  public function getPaymentUrl() {
    global $base_url;
    return $base_url . '/commerce_mollie_tests/fake_mollie_post_url';
  }

  /**
   * Overrides the create() method.
   *
   * @param mixed $transaction_data
   *   Payload.
   *
   * @return $this
   *   Return itself for further processing.
   */
  public function create($transaction_data) {
    return $this;
  }

  /**
   * Overrides the get() method.
   *
   * @return $this
   *   Return itself for further processing.
   */
  public function get() {
    return $this;
  }

  /**
   * Implements the mollie_post_url for testing.
   *
   * @return \Symfony\Component\HttpFoundation\RedirectResponse
   *   Redirects to the checkout/payment page without any processing.
   */
  public function molliePostUrl() {
    global $base_url;
    $return_url = $base_url . '/checkout/1/payment/return';
    return new RedirectResponse($return_url);
  }

  /**
   * Implements the isPaid() method for testing.
   *
   * @return bool
   *   TRUE when the remote payment is paid.
   */
  public function isPaid() {
    return TRUE;
  }

}
