<?php
include_once('grandfather.php');
include_once('Father.php');
include_once('Sonny.php');
$son = new son(15);
$son->sing();
$father = new Father(50);
echo $father->run();