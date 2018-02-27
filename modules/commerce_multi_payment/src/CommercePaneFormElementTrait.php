<?php

namespace Drupal\commerce_multi_payment;

use Drupal\commerce_multi_payment\Entity\StagedPaymentInterface;
use Drupal\commerce_order\Entity\OrderInterface;
use Drupal\Component\Utility\NestedArray;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\CommandInterface;
use Drupal\Core\Ajax\InsertCommand;
use Drupal\Core\Ajax\PrependCommand;
use Drupal\Core\Form\FormStateInterface;

trait CommercePaneFormElementTrait {

  /**
   * Ajax callback.
   */
  public static function ajaxRefresh(array $form, FormStateInterface $form_state) {
    $parents = $form_state->getTriggeringElement()['#parents'];
    array_pop($parents);
    $element = NestedArray::getValue($form, $parents);

    $response = new AjaxResponse();
    $response->addCommand(new InsertCommand(NULL, $element));
    $response->addCommand(new PrependCommand(NULL, ['#type' => 'status_messages']));
    // Allow parent elements to hook into the ajax refresh.
    foreach ($element['#element_ajax'] as $element_ajax) {
      if (is_callable($element_ajax)) {
        $commands = $element_ajax($form, $form_state);
        foreach ($commands as $command) {
          if ($command instanceof CommandInterface) {
            $response->addCommand($command);
          }
        }
      }
    }

    return $response;
  }

  /**
   * @param int $order_id
   *
   * @return \Drupal\commerce_order\Entity\OrderInterface|null
   */
  public static function loadOrder($order_id) {
    return \Drupal::entityTypeManager()->getStorage('commerce_order')->load($order_id);
  }

  /**
   * @param int $staged_payment_id
   *
   * @return \Drupal\commerce_multi_payment\Entity\StagedPaymentInterface|null
   */
  public static function loadStagedPayment($staged_payment_id) {
    return \Drupal::entityTypeManager()->getStorage('commerce_staged_multi_payment')->load($staged_payment_id);
  }

  /**
   * @param array $values
   * @param bool $save
   *
   * @return \Drupal\commerce_multi_payment\Entity\StagedPaymentInterface
   */
  public static function createStagedPayment(array $values, $save = FALSE) {
    $staged_payment_storage = \Drupal::entityTypeManager()->getStorage('commerce_staged_multi_payment');
    $staged_payment = $staged_payment_storage->create($values);
    if ($save) {
      $staged_payment->save();
    }
    return $staged_payment;
  }
  
  public static function getAdjustedPaymentAmount(StagedPaymentInterface $staged_payment) {
    $amount = $staged_payment->getAmount();
    // Prevent the payment amount from being more than the total order price, with existing adjustments.
    $order_total_with_adjustment = $staged_payment->getOrder()->getTotalPrice();
    if (!$staged_payment->isNew()) {
      foreach ($staged_payment->getOrder()->getAdjustments() as $adjustment) {
        if ($adjustment->getType() == 'staged_multi_payment' && $adjustment->getSourceId() == $staged_payment->id()) {
          // Subtract because adjustment is negative
          $order_total_with_adjustment = $order_total_with_adjustment->subtract($adjustment->getAmount());
        }
      }
    }
    if ($order_total_with_adjustment->lessThan($amount)) {
      // Trying to pay too much, change the amount.
      $amount = $order_total_with_adjustment;
    }
    return $amount;
  }

  /**
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   * @param array $parents
   * @param mixed|null $value
   */
  public static function setUserInput(FormStateInterface &$form_state, array $parents, $value = NULL) {
    $user_input = &$form_state->getUserInput();
    NestedArray::setValue($user_input, $parents, $value);
  }

  /**
   * @param int $payment_gateway_id
   *
   * @return \Drupal\commerce_payment\Entity\PaymentGatewayInterface
   */
  public static function loadPaymentGateway($payment_gateway_id) {
    return \Drupal::service('commerce_multi_payment.manager')->loadPaymentGateway($payment_gateway_id);
  }

  /**
   * @param int $payment_gateway_id
   * 
   * @return \Drupal\commerce_payment\Plugin\Commerce\PaymentGateway\PaymentGatewayInterface
   */
  public static function loadPaymentGatewayPlugin($payment_gateway_id) {
    return \Drupal::service('commerce_multi_payment.manager')->loadPaymentGateway($payment_gateway_id)->getPlugin();
  }

  /**
   * @param \Drupal\commerce_order\Entity\OrderInterface $order
   * @param string|null $for_payment_gateway_id
   *
   * @return \Drupal\commerce_multi_payment\Entity\StagedPaymentInterface[]
   */
  public static function getStagedPaymentsFromOrder(OrderInterface $order, $for_payment_gateway_id = NULL) {
    $staged_payments = [];
    if (!$order->get('staged_multi_payment')->isEmpty()) {
      foreach ($order->get('staged_multi_payment')->referencedEntities() as $staged_payment) {
        /** @var \Drupal\commerce_multi_payment\Entity\StagedPaymentInterface $staged_payment */
        if (empty($for_payment_gateway_id) || $staged_payment->getPaymentGatewayId() === $for_payment_gateway_id) {
          $staged_payments[$staged_payment->id()] = $staged_payment;
        }
      }
    }
    return $staged_payments;
  }
}
