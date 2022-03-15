<?php

class Service
{


 public function selectAll()
 {
     $pdo = DbConfig::getInstance();
     $sql = "SELECT * from services ";
     $Q = $pdo->getConnection()->prepare($sql);
     $Q->execute();
     return $Q->fetchAll();
 }
}
