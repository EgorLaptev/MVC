<?php

namespace Project\Models;
use Core\Model;

class Users extends Model
{
  public function getAll()
  {
    return $this->query("SELECT * from `users`");
  }
  public function getById($id)
  {
    return $this->query("SELECT * from `users` WHERE `id` = '$id' LIMIT 1");
  }
  public function getByLogin($login)
  {
    return $this->query("SELECT * from `users` WHERE `login` = '$login' LIMIT 1");
  }
}

?>
