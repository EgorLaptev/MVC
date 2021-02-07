<?php

namespace Core;

class Controller
{

  protected $layout = 'default';
  protected $title  = 'Page title';

  protected function render($view, $data = [])
  {
    return new Page($this->layout, $this->title, $view, $data);
  }

}

?>
