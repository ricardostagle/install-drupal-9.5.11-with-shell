<?php

/**
 * @file
 * Implement hook_controller()
 */

namespace Drupal\hello_service\Controller;

use Drupal\Core\Controller\ControllerBase;


class HelloServiceController extends ControllerBase {


  public function content(){


    $miservicio = \Drupal::service('hello_service.sayhello');
    $misaludo = $miservicio->getSaludo();

    ksm($misaludo);

    return [
      '#markup' => $this->t('Hello @misaludo', ['@misaludo' => $misaludo ]),
    ];

  }
}
