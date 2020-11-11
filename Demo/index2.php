<?php
include_once('grandfather.php');
include_once('Father.php');
include_once('Sonny.php');


$ong = new grandfather(80);
echo 'tuoi ong:'.$ong->age;
echo "chay duoc ".$ong->run();