<?php

namespace Drupal\price\Event;

/**
 * Defines events for the price module.
 */
final class PriceEvents {

  /**
   * Name of the event fired when loading a number format.
   *
   * This event allows modules to alter the loaded number format before it's
   * returned and used by the system. The event listener method receives a
   * \Drupal\price\Event\NumberFormatEvent instance.
   *
   * @Event
   *
   * @see \Drupal\price\Event\NumberFormatEvent
   */
  const NUMBER_FORMAT_LOAD = 'price.number_format.load';

}
