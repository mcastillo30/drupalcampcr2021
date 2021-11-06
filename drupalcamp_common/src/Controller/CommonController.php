<?php
namespace Drupal\drupalcamp_common\Controller;

use Drupal\Core\Controller\ControllerBase;

class CommonController extends ControllerBase {

  /**
   * @return string[]
   */
  public function index() {
    return [
      '#markup' => 'Hello world',
    ];
  }
}
