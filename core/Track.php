<?php

namespace Core;

class Track
{

  private $controller;
  private $action;

  public function __construct($controller, $action)
  {
    $this->controller = $controller;
    $this->action     = $action;
  }

  public function __get($prop)
  {
    return $this->$prop;
  }

}

?>
