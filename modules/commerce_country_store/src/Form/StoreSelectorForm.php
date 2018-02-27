<?php

namespace Drupal\commerce_country_store\Form;


use Drupal\commerce_store\Entity\Store;
use Drupal\commerce_store\StoreContext;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;

class StoreSelectorForm extends FormBase {

  /**
   * @var \Drupal\Core\Entity\EntityStorageInterface
   */
  protected $storage;

  /**
   * @var Store
   */
  protected $store;

  /**
   * The current request
   *
   * @var \Symfony\Component\HttpFoundation\Request
   */
  protected $currentRequest;

  public function __construct(EntityTypeManagerInterface $entity_type_manager, StoreContext $storeContext, RequestStack $requestStack) {
    $this->store = $storeContext->getStore();
    $this->storage = $entity_type_manager->getStorage('commerce_store');
    $this->currentRequest = $requestStack->getCurrentRequest();
  }

  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity_type.manager'),
      $container->get('commerce_store.store_context'),
      $container->get('request_stack')
    );
  }

  public function getFormId() {
    return 'commerce_country_store_selector';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $options = [];
    $default = FALSE;

    foreach ($this->storage->loadMultiple() as $store) {
      /** @var Store $store */
      $url = Url::createFromRequest($this->currentRequest);
      $url->setOption('store', $store);
      $url_string = $url->toString();

      if ($store->id() == $this->store->id()) {
        $default = $url_string;
      }

      $options[$url_string] = $this->storeLabel($store);
    }

    $form['selector'] = [
      '#type' => 'select',
      '#options' => $options,
      '#default_value' => $default,
      '#attributes' => [
        'class' => ['currency-select'],
        'onChange' => ['window.location.href=this.value']
      ],
    ];

    return $form;
  }

  protected function storeLabel(Store $store) {
    return $store->label();
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $url_string = $form_state->getValue('selector');
    $form_state->setRedirectUrl($url_string);
  }

}