<?php

namespace Drupal\digitalconvergence_4xx\EventSubscriber;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * Alters the system provided routes for overriding the controller.
 */
class RouteSubscriber extends RouteSubscriberBase {

  /**
   * An array of routes and corresponding methods for the controller override.
   *
   * @var array
   */
  protected $overrides = [
      ['route_name' => 'system.4xx', 'method' => 'on4xx'],
      ['route_name' => 'system.403', 'method' => 'on403'],
      ['route_name' => 'system.404', 'method' => 'on404'],
  ];

  /**
   * {@inheritdoc}
   */
  protected function alterRoutes(RouteCollection $collection) {
    foreach ($this->overrides as $info) {
      if ($route = $collection->get($info['route_name'])) {
        $route->setDefault('_controller', '\Drupal\digitalconvergence_4xx\Controller\Http4xxController::' . $info['method']);
      }
    }
  }

}
