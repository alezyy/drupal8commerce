<?php

namespace Drupal\price\TwigExtension;

use Drupal\price\Price;

/**
 * Provides Price-specific Twig extensions.
 */
class PriceTwigExtension extends \Twig_Extension {

  /**
   * @inheritdoc
   */
  public function getFilters() {
    return [
      new \Twig_SimpleFilter('price_format', [$this, 'formatPrice']),
    ];
  }

  /**
   * @inheritdoc
   */
  public function getName() {
    return 'price.twig_extension';
  }

  /**
   * Formats a price object/array.
   *
   * Example: {{ order.getTotalPrice|price_format }}
   *
   * @param mixed $price
   *   Either a Price object, or an array with number and currency_code keys.
   *
   * @return mixed
   *   A formatted price, suitable for rendering in a twig template.
   *
   * @throws \InvalidArgumentException
   */
  public static function formatPrice($price) {
    if ($price instanceof Price) {
      $price = $price->toArray();
    }

    if (is_array($price) && isset($price['currency_code']) && isset($price['number'])) {
      $number_formatter = \Drupal::service('price.number_formatter_factory')->createInstance();
      $currency_storage = \Drupal::entityTypeManager()->getStorage('price_currency');
      $currency = $currency_storage->load($price['currency_code']);
      return $number_formatter->formatCurrency($price['number'], $currency);
    }
    else {
      throw new \InvalidArgumentException('The "price_format" filter must be given a price object or an array with "number" and "currency_code" keys.');
    }
  }

}
