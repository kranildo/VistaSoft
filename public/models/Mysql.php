<?php

class Mysql
{
  public static $link;

  function __construct()
  {
  }

  public static function conectar()
  {
    $host = "localhost";
    $dbname = "ticombr_teste";
    $usuario = "ticombr_teste";
    $senha = "md#)~br6XB5?";

    Mysql::$link = new PDO(
      'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8mb4',
      $usuario,
      $senha,
      array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_PERSISTENT => false
      )
    );
  }
}
