<?php

namespace Core;

class Model
{

  static $pdo;

  public function __construct()
  {
    if(!self::$pdo) {
      $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8';
      self::$pdo = new \PDO($dsn, DB_USER, DB_PASS);
    }
  }

  public function query($query)
  {
    $resp = self::$pdo->query($query);
    $result = $resp->fetch();
    return $result;
  }

}

?>
