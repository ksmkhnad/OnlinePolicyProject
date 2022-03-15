<?php

require_once"autoload.php";

$name = $_POST['name'];
$date = $_POST['date'];
$service = $_POST['service'];

$ID = '1';


$event = new Events();

$event -> createEvent($name, $date, $service, $ID);

?>
