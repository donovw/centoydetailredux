<?php
  require 'config.class.php';
  /**
   *
   */
  class Vehicle
  {
    public static function getSingleVehicle($sby, $sparam){
      $db = DB::getInstance();
      $sql = "SELECT * FROM vehicles WHERE {$sby} LIKE ?";
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
      $sqlkeys = "";
      foreach ($sparam as $key => $value) {
        $sqlkeys = $sqlkeys . $key . " = :" . $key . ", ";
      }
      $sqlkeys = substr($sqlkeys ,0,-2);
      $sql = "UPDATE vehicles SET {$sqlkeys} WHERE id = :id";
      echo $sql;
      $stmt = $db->prepare($sql);
      $stmt->execute($sparam);
    }

    public static function addNewVehicle(){}
  }

$veh = Vehicle::getSingleVehicle("stk", "490001");
print_r($veh);
