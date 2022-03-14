<?php

class Master
{
 private $name;
 private $service;
 private $salonid;

 public function masterBySalonId($ID)
 {
     $pdo = DbConfig::getInstance();
     $sql = "SELECT * from master where SalonId = :ID";
     $Q = $pdo->getConnection()->prepare($sql);
     $Q -> bindParam(':ID', $ID);
     $Q->execute();
     return $Q->fetchAll();
 }
 
 public function allMaster()
 {
     $pdo = DbConfig::getInstance();
     $sql = "SELECT * from master";
     $Q = $pdo->getConnection()->prepare($sql);
     $Q->execute();
     return $Q->fetchAll();
 }
}
