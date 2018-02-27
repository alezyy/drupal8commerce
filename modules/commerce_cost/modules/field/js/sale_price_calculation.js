/**
 * @file
 * Defines sale price based off product price, cost and markup.
 */
(function ($, Drupal) {
  'use strict';

  Drupal.behaviors.commerce_cost_calculation = {
    attach: function (context, settings) {
      var markupClass = 'field--name-field-markup-percentage';
      var priceClass = '.field--name-' + drupalSettings.commerce_cost_field.price_field;
      var costClass = '.field--name-' + drupalSettings.commerce_cost_field.cost_field;

      // Commerce price DOM elements.
      var $markup = '';
      var $price = $(priceClass).find('input');
      var $cost = $(costClass).find('input');

      // The markup textfield.
      var markupElement = '<label for="markup-percentage" class="markup-field-label">Markup percentage</label>';
      markupElement += '<input type="text" size="10" id="markup-percentage" class="form-text ' + markupClass + '">';
      markupElement += '<span class="field-suffix">%</span>';
      $markup = $(markupElement);
      if ($('#markup-percentage').length === 0) {
        $markup.insertAfter($(costClass));
      }
      markupClass = '.' + markupClass;
      $markup = $(markupClass);

      // Default value for already set product's margin.
      if ($cost.val() !== '' && $price.val() !== '') {
        var value = ((($price.val() - $cost.val()) / $cost.val()) * 100).toFixed(2);
        $markup.val(value);
      }

      // Cost and Markup fields changed - set price.
      $cost.add($markup).on('keyup', function() {
        if ($cost.val() !== '' && $markup.val() !== '') {
          var priceNumber = $price.get(0);
          var value = $cost.val() * (1 + $markup.val() / 100);
          animateTextField($(priceNumber), value);
        }
      });

      // Price field changed - set markup.
      $price.on('keyup', function() {
        if ($price.val() !== '' && $cost.val() !== '') {
          var value = (($price.val() - $cost.val()) / $cost.val()) * 100;
          animateTextField($markup, value);
        }
      });

      /**
       * Provide an animation on textfields highlighting value change.
       */
      function animateTextField($obj, val) {
        var value = val.toFixed(2);
        if (!isNaN(value)) {
          $obj
            .val(value)
            .addClass('commerce-cost-value-changed');

          setTimeout(function() {
            $obj.removeClass('commerce-cost-value-changed');
          }, 500);
        }
      }

    }
  };

})(jQuery, Drupal);
