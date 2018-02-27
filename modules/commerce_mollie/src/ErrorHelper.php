<?php

namespace Drupal\commerce_mollie;

use Drupal\commerce_payment\Exception\AuthenticationException;
use Drupal\commerce_payment\Exception\InvalidResponseException;

/**
 * Translates Mollie exceptions and errors into Commerce exceptions.
 */
class ErrorHelper {

  /**
   * Translates Mollie exceptions into Commerce exceptions.
   *
   * @param \Mollie_API_Exception $exception
   *   The Mollie exception.
   *
   * @throws \Drupal\commerce_payment\Exception\PaymentGatewayException
   *   The Commerce exception.
   */
  public static function handleException(\Mollie_API_Exception $exception) {

    if ('Invalid API key' === substr($exception->getMessage(), 0, 15)) {
      throw new AuthenticationException($exception->getMessage());
    }

    else {
      throw new InvalidResponseException($exception->getMessage());
    }

  }

  /**
   * Translates Mollie errors into Commerce exceptions.
   *
   * @param object $result
   *   The Mollie result object.
   *
   * @throws \Drupal\commerce_payment\Exception\PaymentGatewayException
   *   The Commerce exception.
   */
  public static function handleErrors($result) {
  }

}
