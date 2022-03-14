<?php

class Salon
{


 public function selectAll()
 {
     $pdo = DbConfig::getInstance();
     $sql = "SELECT * from salon ";
     $Q = $pdo->getConnection()->prepare($sql);
     $Q->execute();
     return $Q->fetchAll();
 }
}
