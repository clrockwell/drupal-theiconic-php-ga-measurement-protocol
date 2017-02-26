<?php

namespace Drupal\ga_measurement_protocol\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class AdminSettingsForm.
 *
 * @package Drupal\ga_measurement_protocol\Form
 */
class AdminSettingsForm extends ConfigFormBase {


  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'ga_measurement_protocol_admin_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'ga_measurement_protocol.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['tracking_id'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Tracking ID'),
      '#description' => $this->t('The Universal Analytics tracking id for this property'),
      '#maxlength' => 64,
      '#size' => 64,
      '#placeholder' => 'UA-xxxxxxxx-x',
      '#default_value' => $this->config('ga_measurement_protocol.settings')->get('tracking_id')
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    ];

    return $form;
  }

  /**
    * {@inheritdoc}
    */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);

    // Ensure tracking ID matches what Google Analytics expects
    $property = $form_state->getValue('tracking_id');
    if (!empty($property) && !preg_match('/^UA-\d+-\d+$/', $property)) {
      $form_state->setErrorByName('tracking_id', $this->t('The provided Tracking ID is not valid.'));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('ga_measurement_protocol.settings')
      ->set('tracking_id', $form_state->getValue('tracking_id'))
      ->save();

    parent::submitForm($form, $form_state);

  }

}
