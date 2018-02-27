<?php

namespace Drupal\commerce_add_to_cart_matrix\Form;

use Drupal\commerce\PurchasableEntityInterface;
use Drupal\commerce_cart\CartManagerInterface;
use Drupal\commerce_cart\CartProviderInterface;
use Drupal\commerce_order\Resolver\OrderTypeResolverInterface;
use Drupal\commerce_store\CurrentStoreInterface;
use Drupal\Component\Datetime\TimeInterface;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityTypeBundleInfoInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Form\BaseFormIdInterface;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\commerce_add_to_cart_matrix\Plugin\Field\FieldFormatter\AddToCartMatrixFormatter;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class AddToCartMatrix.
 */
class AddToCartMatrix extends FormBase implements BaseFormIdInterface {

  /**
   * The entity.
   *
   * @var \Drupal\commerce_product\Entity\ProductInterface
   */
  private $product;

  /**
   * The field formatter.
   *
   * @var \Drupal\commerce_add_to_cart_matrix\Plugin\Field\FieldFormatter\AddToCartMatrixFormatter
   */
  private $field;

  /**
   * The entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  private $entityTypeManager;

  /**
   * The order type resolver.
   *
   * @var \Drupal\commerce_order\Resolver\OrderTypeResolverInterface
   */
  private $orderTypeResolver;

  /**
   * The cart provider.
   *
   * @var \Drupal\commerce_cart\CartProviderInterface
   */
  private $cartProvider;

  /**
   * The current store.
   *
   * @var \Drupal\commerce_store\CurrentStoreInterface
   */
  private $currentStore;

  /**
   * The cart manager.
   *
   * @var \Drupal\commerce_cart\CartManagerInterface
   */
  private $cartManager;

  /**
   * Constructs a new AddToCartForm object.
   *
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entityTypeManager
   *   The entity manager.
   * @param \Drupal\Core\Entity\EntityTypeBundleInfoInterface $entity_type_bundle_info
   *   The entity type bundle info.
   * @param \Drupal\Component\Datetime\TimeInterface $time
   *   The time.
   * @param \Drupal\commerce_cart\CartManagerInterface $cart_manager
   *   The cart manager.
   * @param \Drupal\commerce_cart\CartProviderInterface $cart_provider
   *   The cart provider.
   * @param \Drupal\commerce_order\Resolver\OrderTypeResolverInterface $order_type_resolver
   *   The order type resolver.
   * @param \Drupal\commerce_store\CurrentStoreInterface $current_store
   *   The current store.
   */
  public function __construct(EntityTypeManagerInterface $entityTypeManager, EntityTypeBundleInfoInterface $entity_type_bundle_info, TimeInterface $time, CartManagerInterface $cart_manager, CartProviderInterface $cart_provider, OrderTypeResolverInterface $order_type_resolver, CurrentStoreInterface $current_store) {
    $this->entityTypeManager = $entityTypeManager;
    $this->cartManager = $cart_manager;
    $this->cartProvider = $cart_provider;
    $this->orderTypeResolver = $order_type_resolver;
    $this->currentStore = $current_store;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity_type.manager'),
      $container->get('entity_type.bundle.info'),
      $container->get('datetime.time'),
      $container->get('commerce_cart.cart_manager'),
      $container->get('commerce_cart.cart_provider'),
      $container->get('commerce_order.chain_order_type_resolver'),
      $container->get('commerce_store.current_store')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state): array {
    $vertical_key = $this->field->getSetting('vertical_attribute');
    $horizontal_key = $this->field->getSetting('horizontal_attribute');

    if (NULL === $horizontal_key || NULL === $vertical_key) {
      return [];
    }

    $variations = $this->product->getVariations();

    $input_default = [
      '#title' => NULL,
      '#type' => 'number',
      '#min' => 0,
    ];

    $available_vertical = [];
    $available_horizontal = [];

    $vertical_weights = [];
    $horizontal_weights = [];

    $list = [];

    foreach ($variations as $variation) {
      if ($vertical_attribute = $variation->getAttributeValue($vertical_key)) {
        $list[$variation->id()][$vertical_key] = $vertical_attribute->getName();
        $available_vertical[$vertical_attribute->getName()][] = $variation->id();
        $vertical_weights[$vertical_attribute->getName()] = $vertical_attribute->getWeight();
      }
      if ($horizontal_attribute = $variation->getAttributeValue($horizontal_key)) {
        $list[$variation->id()][$horizontal_key] = $horizontal_attribute->getName();
        $available_horizontal[$horizontal_attribute->getName()][] = $variation->id();
        $horizontal_weights[$horizontal_attribute->getName()] = $horizontal_attribute->getWeight();
      }
      // We add hidden fields to make the form process these regularly.
      $form['product__' . $variation->id()] = ['#type' => 'hidden'];
    }

    $this->sortByWeight($available_horizontal, $horizontal_weights);
    $this->sortByWeight($available_vertical, $vertical_weights);

    $headings = [];
    $headings[] = '';
    foreach ($available_horizontal as $heading => $items) {
      $headings[] = $heading;
    }

    $rows = [];
    $rowcount = 0;
    foreach ($available_vertical as $heading => $items) {
      $rows[$rowcount] = [$heading];

      $i = 1;
      foreach ($available_horizontal as $horizontalkey => $horizontal_ids) {
        foreach ($list as $product_id => $values) {
          if ($values[$horizontal_key] === $horizontalkey && $values[$vertical_key] === $heading) {
            $row = $input_default + [
              '#name' => 'product__' . $product_id,
              '#id' => 'product__' . $product_id,
            ];
            $rows[$rowcount][$i]['data'][] = $row;
            continue;
          }
        }
        if (!isset($rows[$rowcount][$i])) {
          $rows[$rowcount][$i] = 'NA';
        }
        $i++;
      }
      $rowcount++;
    }

    $form['table'] = [
      '#type' => 'table',
      '#header' => $headings,
      '#rows' => $rows,
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Add to cart'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state): void {
    foreach ($form_state->getValues() as $key => $add_to_cart_amount) {
      if (strpos($key, 'product__', 0) === 0 && (int) $add_to_cart_amount > 0) {
        $product_variation = $this->entityTypeManager
          ->getStorage('commerce_product_variation')
          ->load((int) str_replace('product__', '', $key));

        /** @var \Drupal\commerce\PurchasableEntityInterface $purchased_entity */
        $purchased_entity = $product_variation;

        /** @var \Drupal\commerce_order\OrderItemStorageInterface $order_item_storage */
        $order_item_storage = $this->entityTypeManager->getStorage('commerce_order_item');

        $order_item = $order_item_storage->createFromPurchasableEntity($purchased_entity);

        $order_type_id = $this->orderTypeResolver->resolve($order_item);
        $store = $this->selectStore($purchased_entity);
        $cart = $this->cartProvider->getCart($order_type_id, $store);
        if (!$cart) {
          $cart = $this->cartProvider->createCart($order_type_id, $store);
        }

        $order_item->setQuantity((int) $add_to_cart_amount);
        $this->cartManager->addOrderItem($cart, $order_item, $this->field->getSetting('combine'));
        // Other submit handlers might need the cart ID.
        $form_state->set('cart_id', $cart->id());
      }
    }
  }

  /**
   * {@inheritdoc}
   */
  public function getBaseFormId(): string {
    return 'add_to_cart_matrix__product';
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId(): string {
    return 'add_to_cart_matrix__product__' . $this->product->id();
  }

  /**
   * Sets the entity.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The entity.
   */
  public function setEntity(EntityInterface $entity) {
    $this->product = $entity;
  }

  /**
   * Sets the field we are working with.
   *
   * @param \Drupal\commerce_add_to_cart_matrix\Plugin\Field\FieldFormatter\AddToCartMatrixFormatter $field
   *   The field.
   */
  public function setField(AddToCartMatrixFormatter $field) {
    $this->field = $field;
  }

  /**
   * Selects the store for the given purchasable entity.
   *
   * If the entity is sold from one store, then that store is selected.
   * If the entity is sold from multiple stores, and the current store is
   * one of them, then that store is selected.
   *
   * @param \Drupal\commerce\PurchasableEntityInterface $entity
   *   The entity being added to cart.
   *
   * @throws \Exception
   *   When the entity can't be purchased from the current store.
   *
   * @return \Drupal\commerce_store\Entity\StoreInterface
   *   The selected store.
   */
  protected function selectStore(PurchasableEntityInterface $entity) {
    $stores = $entity->getStores();
    if (count($stores) === 1) {
      $store = reset($stores);
    }
    elseif (count($stores) === 0) {
      // Malformed entity.
      throw new \Exception('The given entity is not assigned to any store.');
    }
    else {
      $store = $this->currentStore->getStore();
      if (!in_array($store, $stores)) {
        // Indicates that the site listings are not filtered properly.
        throw new \Exception("The given entity can't be purchased from the current store.");
      }
    }

    return $store;
  }

  /**
   * Sorts the 2 items  by weight.
   *
   * @param array $array_to_sort
   *   The array to sort.
   * @param array $sort_weights
   *   The sort weights.
   */
  private function sortByWeight(array &$array_to_sort, array $sort_weights) {
    uksort($array_to_sort, function ($first, $second) use ($sort_weights) {
      $first_check = (float) $sort_weights[$first];
      $second_check = (int) $sort_weights[$second];
      if ($first_check > $second_check) {
        return 1;
      }
      if ($first_check < $second_check) {
        return -1;
      }
      return 0;
    });
  }

}
