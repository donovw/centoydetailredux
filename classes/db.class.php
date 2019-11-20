<?php

/**
 *
 */
class DB
{
  protected static $_instance;

  private function __construct()  { }

  public static function getInstance() {
    if (empty(self::$_instance)) {
      try {
        self::$_instance = new PDO("mysql:host=127.0.0.1; dbname=centoydetail","root", "");
      }
      catch (PDOexception $e) {
        echo $e->getMessage();
      }

    }
    echo "connected to database";
    return self::$_instance;
  }
}
