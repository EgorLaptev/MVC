<?php

namespace Core;

class Dispatcher
{

   public function getPage($track)
   {

     $className = ucfirst($track->controller) . 'Controller';
     $fullName  = "\\Project\\Controllers\\$className";

     try {

       $controller = new $fullName;

       if(method_exists($controller, $track->action)) {

         $result = $controller->{ $track->action}();

         return ($result) ? $result : new Page();

       } else echo "Метод <b>{$track->action}</b> не был найден!";

     } catch (\Exception $error) {
       echo $error->getMessage();
       die();
     }

   }

}

?>
