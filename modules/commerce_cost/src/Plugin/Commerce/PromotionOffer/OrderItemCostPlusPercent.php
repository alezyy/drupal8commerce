<?php

namespace Drupal\commerce_cost\Plugin\Commerce\PromotionOffer;

use Drupal\commerce_cost\CostOf;
use Drupal\commerce_order\Adjustment;
use Drupal\commerce_price\Calculator;
use Drupal\commerce_promotion\Entity\PromotionInterface;
use Drupal\commerce_promotion\Plugin\Commerce\PromotionOffer\PromotionOfferBase;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\commerce_price\RounderInterface;

/**
 * Provides the cost plus percent offer for order items.
 *
 * @CommercePromotionOffer(
 *   id = "order_item_cost_plus_percent",
 *   label = @Translation("Set price to cost plus a percentage"),
 *   entity_type = "commerce_order_item",
 * )
 */
class OrderItemCostPlusPercent extends PromotionOfferBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
      'percentage' => '0',
    ] + parent::defaultConfiguration();
  }

  /**
   * Gets the percentage.
   *
   * @return string
   *   The percentage.
   */
  public function getPercentage() {
    return (string) $this->configuration['percentage'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    $form += parent::buildConfigurationForm($form, $form_state);

    $form['percentage'] = [
      '#type' => 'commerce_number',
      '#title' => $this->t('Percentage'),
      '#default_value' => $this->configuration['percentage'] * 100,
      '#maxlength' => 255,
      '#min' => 0,
      '#max' => 100,
      '#size' => 4,
      '#field_suffix' => $this->t('%'),
      '#required' => TRUE,
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateConfigurationForm(array &$form, FormStateInterface $form_state) {
    $values = $form_state->getValue($form['#parents']);
    if (empty($values['percentage'])) {
      $form_state->setError($form, $this->t('Percentage must be a positive number.'));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    parent::submitConfigurationForm($form, $form_state);

    $values = $form_state->getValue($form['#parents']);
    $this->configuration['percentage'] = (string) ($values['percentage'] / 100);
  }

  /**
   * {@inheritdoc}
   */
  public function apply(EntityInterface $entity, PromotionInterface $promotion) {
    $this->assertEntity($entity);
    /** @var \Drupal\commerce_order\Entity\OrderItemInterface $order_item */
    $order_item = $entity;
    $cost = $order_item->get('field_cost');
    if ($cost->isEmpty()) {
      return;
    }
    $cost = $cost->first();
    /** @var \Drupal\commerce_price\Plugin\Field\FieldType\PriceItem $cost */
    $cost = $cost->toPrice();
    /** @var \Drupal\commerce_price\Price $cost */
    $cost = $cost->divide($order_item->getQuantity());
    $difference = $cost->multiply(Calculator::add("1", $this->getPercentage()));
    $adjustment_amount = $difference->subtract($order_item->getUnitPrice());
    $adjustment_amount = $this->rounder->round($adjustment_amount);

    $order_item->addAdjustment(new Adjustment([
      'type' => 'promotion',
      // @todo Change to label from UI when added in #2770731.
      'label' => t('Discount'),
      'amount' => $adjustment_amount,
      'percentage' => $this->getPercentage(),
      'source_id' => $promotion->id(),
    ]));
  }

}
