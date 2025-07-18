<?php

declare(strict_types=1);

/**
 * @file
 * Theme settings form for PuPa Theme theme.
 */

use Drupal\Core\Form\FormState;

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function publicpalika_form_system_theme_settings_alter(array &$form, FormState $form_state): void {

  $form['publicpalika'] = [
    '#type' => 'details',
    '#title' => t('PuPa Theme'),
    '#open' => TRUE,
  ];

  $form['publicpalika']['example'] = [
    '#type' => 'textfield',
    '#title' => t('Example'),
    '#default_value' => theme_get_setting('example'),
  ];

}
