<?php

namespace Project\Controllers;
use Core\Controller;
use Project\Models\Users;

class PageController extends Controller
{
  public function Home()
  {

    $user = ( new Users ) -> getByLogin('John');

    $this->title = 'Home';
    return $this->render('home', [
      'user' => $user,
    ]);
  }
}

?>
