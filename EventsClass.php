<?php

class Events
{
  private $name;
  private $date;
  private $service;
  private $ID;

 public function eventsbyMasterId($ID)
 {
     $pdo = DbConfig::getInstance();
     $sql = "SELECT * from appointment where MasterId = :ID";
     $Q = $pdo->getConnection()->prepare($sql);
     $Q -> bindParam(':ID', $ID);
     $Q->execute();
     return $Q->fetchAll();
 }

 public function allEvents()
 {
     $pdo = DbConfig::getInstance();
     $sql = "SELECT * from events";
     $Q = $pdo->getConnection()->prepare($sql);
     $Q->execute();
     return $Q->fetchAll();
 }

 public function createEvent($name, $date, $service, $ID){
     $pdo = DbConfig::getInstance();
     $SQL = "INSERT INTO appointment (CustomerId, AppointmentDate, AppointmentName, MasterId) VALUES (:name, :date, :service, :ID)";
     $Q = $pdo -> getConnection()-> prepare($SQL);

     $Q -> bindParam(':name', $name);
     $Q -> bindParam(':date', $date);
     $Q -> bindParam(':service', $service);
     $Q -> bindParam(':ID', $ID);

     $Q -> execute();

     return  $pdo -> getConnection()->lastInsertId();
 }

 public function deleteEventByID($ID)
 {
     $pdo = DbConfig::getInstance();
     $SQL = "DELETE from appointment where AppointmentId = :ID";
     $Q = $pdo -> getConnection()-> prepare($SQL);
     $Q -> bindParam(':ID', $ID);
     $Q -> execute();
 }
}
