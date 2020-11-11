<?php
include_once ('Circle1.php');
include_once ('Cylinder1.php');
$circle = new Circle1('Cylinder1','12','red');
echo 'dien tich: ' . $circle->calculateArea() . '<br>';
$cylinder1 = new Cylinder1('Cylund1',8,'red',8);
echo 'the tich :'.$cylinder1->calculateArea() . '<br>';
$circle ->setRadius('18');
echo 'dien tich: ' . $circle->calculateArea() . '<br>';
echo $circle->toString();

