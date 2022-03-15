<?php
require_once"autoload.php";


$ID = $_GET['id'];

$events = new Events();
$events -> deleteEventByID($ID);
