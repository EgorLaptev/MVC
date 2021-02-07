<?php

namespace Core;

require_once $_SERVER['DOCUMENT_ROOT'] . '/project/config/connection.php';

spl_autoload_register(function($class) {

  preg_match('/(.+)\\\\(.+)$/', $class, $match);

  $nameSpace = $match[1];
  $className = $match[2];

  $path = str_replace('\\', DIRECTORY_SEPARATOR, ($_SERVER['DOCUMENT_ROOT'] . '/' . $nameSpace . '/' . $className . '.php'));

  if(file_exists($path)) {
    require_once $path;
    if(class_exists($class)) {
      return true;
    } else throw new \Exception("Класс $className, не был найден в фале $path!");
  } else throw new \Exception("Файл $path не был найден!");

});

$routes = require $_SERVER['DOCUMENT_ROOT'] . '/project/config/routes.php';
$track  = ( new Router ) -> getTrack($routes, $_SERVER['REQUEST_URI']);
$page   = ( new Dispatcher ) -> getPage($track);

echo ( new View ) -> render($page);

?>
