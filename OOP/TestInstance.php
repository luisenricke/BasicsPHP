<?php
// require('SimpleClass.php');
// include('SimpleClass.php');
require_once('SimpleClass.php');
require_once('Inherintance.php');

$instanceX = new SimpleClass();
$instanceX->name = 'Luis';
$instanceX->lastName = 'Villalobos';
$instanceX->run();

SimpleClass::$value = 'test';


$instanceY = new Student();
$instanceY->name = 'Luis';
$instanceY->lastName = 'Villalobos';
$instanceY->idStudent = '123';
echo $instanceY->toString();

echo "<br/>";

$instanceZ = Person::withNameOnly('Luis');
//$instanceZ->name = 'Luis';
$instanceZ->bornYear = "A";
$instanceZ->gender = "B";
echo $instanceZ->toString();

 ?>