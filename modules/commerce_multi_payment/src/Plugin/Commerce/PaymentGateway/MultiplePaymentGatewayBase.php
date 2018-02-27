<?php

namespace Drupal\commerce_multi_payment\Plugin\Commerce\PaymentGateway;

use Drupal\commerce_multi_payment\MultiplePaymentGatewayInterface;
use Drupal\commerce_payment\Plugin\Commerce\PaymentGateway\PaymentGatewayBase;
use Drupal\Core\Form\FormStateInterface;

abstract class MultiplePaymentGatewayBase extends PaymentGatewayBase implements MultiplePaymentGatewayInterface {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
        'multi_payment' => FALSE,
      ] + parent::defaultConfiguration();
  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildConfigurationForm($form, $form_state);

    $form['multi_payment'] = [
      '#title' => $this->t('Status on Multiple Payments Pane'),
      '#type' => 'radios',
      '#options' => [
        0 => t('Disabled'),
        1 => t('Enabled'),
      ],
      '#default_value' => (int) $this->configuration['multi_payment'],
      '#required' => TRUE,
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    parent::submitConfigurationForm($form, $form_state);

    if (!$form_state->getErrors()) {
      $values = $form_state->getValue($form['#parents']);
      $this->configuration['multi_payment'] = (bool) $values['multi_payment'];
    }
  }
  
}
