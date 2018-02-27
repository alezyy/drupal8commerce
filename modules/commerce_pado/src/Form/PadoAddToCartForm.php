<?php

namespace Drupal\commerce_pado\Form;

use Drupal\Core\Form\FormStateInterface;
use Drupal\commerce_cart\Form\AddToCartForm;
use Drupal\commerce_order\Entity\OrderItem;
use Drupal\commerce\Context;
use Drupal\Core\Link;

/**
 * Provides the order item add to cart form.
 */
class PadoAddToCartForm extends AddToCartForm {

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildForm($form, $form_state);

    // Add add-ons.
    $field_name = $form_state->get(['settings', 'add_on_field']);
    /** @var \Drupal\commerce_product\Entity\ProductInterface $product */
    $product = $form_state->get('product');
    $multiple = $form_state->get(['settings', 'multiple']);
    $view_builder = $this->entityTypeManager->getViewBuilder('commerce_product_variation');

    $form['add_ons'] = [
      '#type' => 'container',
      '#tree' => TRUE,
    ];

    /** @var \Drupal\commerce_product\Entity\ProductInterface $add_on_product */
     foreach ($product->{$field_name}->referencedEntities() as $add_on_product) {
       $variations = $add_on_product->getVariations();
       $variations_view_render = $view_builder->viewMultiple($variations, 'add_on');

       $options = [];
       $add_ons = [];
       foreach ($variations as $key => $add_on_variation) {
         /** @var \Drupal\commerce_product\Entity\ProductVariationInterface $add_on_variation */
        $add_on_variation_id = $add_on_variation->id();
        $options[$add_on_variation_id] = $add_on_variation->getTitle();
        $add_ons[$add_on_variation_id]['#description'] = $variations_view_render[$key];
      }

       if (!empty($options)) {
         if (!$multiple && count($options) > 1) {
           $options = [0 => $this->t('None')] + $options;
           $type = 'select';
         }
         else {
           $type = 'checkboxes';
         }
         $form['add_ons']['add_ons_' . $add_on_product->id()] = [
           '#type' => $type,
           '#options' => $options,
           '#title' => $this->t('Add @product', ['@product' => $add_on_product->label()]),
         ] + $add_ons;
       }
    }
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);
    $add_ons = $form_state->getValue('add_ons');
    $combine = $form_state->get(['settings', 'combine']);
    $add_ons = array_filter($add_ons);
    $variation_ids = [];
    foreach ($add_ons as $add_on_group) {
      if (is_array($add_on_group)) {
        foreach ($add_on_group as $variation_id) {
          $variation_ids[] = $variation_id;
        }
      }
      else {
        $variation_ids[] = $add_on_group;
      }
    }
    $add_on_variations = $this->entityTypeManager->getStorage('commerce_product_variation')->loadMultiple($variation_ids);

    $cart = $this->entityTypeManager->getStorage('commerce_order')->load($form_state->get('cart_id'));

    /** @var \Drupal\commerce_product\Entity\ProductVariation $add_on_variation */
    foreach ($add_on_variations as $add_on_variation) {
      // @todo Allow providing quantity in the add to cart form.
      $order_item = $this->cartManager->createOrderItem($add_on_variation);

      $store = $this->selectStore($add_on_variation);
      $context = new Context($this->currentUser, $store);
      $resolved_price = $this->chainPriceResolver->resolve($add_on_variation, 1, $context);
      $order_item->setTitle($add_on_variation->getOrderItemTitle());
      $order_item->setUnitPrice($resolved_price);
      $this->cartManager->addOrderItem($cart, $order_item, $combine);

      drupal_set_message($this->t('@entity added to @cart-link.', [
        '@entity' => $add_on_variation->label(),
        '@cart-link' => Link::createFromRoute($this->t('your cart', [], ['context' => 'cart link']), 'commerce_cart.page')->toString(),
      ]));
    }
  }

}
