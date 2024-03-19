<?php

namespace Drupal\hello_service;

/**
 * @file
 * Service Example
 */

class HelloService {

  private $saludo;

  /**
   * Passing parameter to construct method
   */
  public function __construct(){

    $this->saludo = ['Hola','¿Qué tal estás?', 'Buenos Días!!'];

  }

  /**
   * @return string
   */
  public function getSaludo(){

    return $this->saludo[array_rand($this->saludo)];
  }

}
