<?php

namespace Drupal\digitalconvergence_4xx\Controller;

use Drupal\system\Controller\Http4xxController as SystemHttp4xxController;

/**
 * Controller for default HTTP 4xx responses.
 */
class Http4xxController extends SystemHttp4xxController {

  /**
   * {@inheritdoc}
   */
  public function on4xx() {
    return [
      '#theme' => 'digitalconvergence_4xx',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function on403() {
    return [
      '#theme' => 'digitalconvergence_403',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function on404() {
    return [
      '#theme' => 'digitalconvergence_404',
    ];
  }

}
