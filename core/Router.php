<?php

namespace Core;

class Router
{

  public function getTrack($routes, $uri)
  {
    foreach ($routes as $route) {
      if($route->path == $uri) {
        return new Track($route->controller, $route->action);
      }
    }

    return new Track('error', 'notFound');
  }

}

?>
