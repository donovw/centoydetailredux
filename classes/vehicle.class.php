<?php
  require 'config.class.php';
  /**
   *
   */
  class Vehicle
  {
    public static function getSingleVehicle($sby, $sparam){
      $db = DB::getInstance();
      $sql = `SELECT * FROM vehicles WHERE {$sby} LIKE ?`;
      $stmt = $db->prepare($sql);
      $stmt->execute([$sparam]);
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      return $result;

    }

    public static function getAllVehicles(){
      $db = DB::getInstance();
      $stmt = $db->prepare("SELECT * FROM vehicles");
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      return $result;
    }

    public static function updateVehicle(array $sparam){
      $db = DB::getInstance();
      $sqlkeys = implode(",", array_keys($sparam));
      echo $sqlkeys;
      $sql = `UPDATE vehicles SET ({$sqlkeys}) `;
    }

    public static function addNewVehicle(){}
  }

Vehicle::updateVehicle(["test" => "this is a test", "test2" => "this is a second test"]);
