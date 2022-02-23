<?php
require_once('bicycle.class.php');
require_once('car.class.php');

//Main

$bike = new Bicycle("Dark");
$bike->setCurrentSpeed(75);
$bike->setNbSeats(1);
$bike->setNbSeats(2);
echo $bike->forward();
echo "<br> Sa vitesse est de ". $bike->getCurrentSpeed(). ' km/heure<br/> ';
echo $bike->brake();
echo "<br> Sa vitesse est de ". $bike->getCurrentSpeed() . ' km/heure<br/> ';
echo $bike->brake();
echo $bike->dump();
var_dump($bike);

$bike2 = new Bicycle("White & blue");
$bike2->setCurrentSpeed(100);
$bike2->setNbSeats(1);
$bike2->setNbRoues(2);
var_dump($bike2);

//Instanciation d'un nouvel objet $Rockrider
$Rockrider = new Bicycle("yellow");
var_dump($Rockrider);

//Instanciation d'un nouvel objet tornado
$tornado = new Bicycle("Dark");
var_dump($tornado);
echo $tornado->forward()." tornado <br/>";

$ferrari = new car("red", 4 ,"Gasoline");
$ferrari->setNbRoues(4);
$ferrari->setCurrentSpeed(250);
$ferrari->setEnergyLevel(50);
$ferrari->start();
$startOn = $ferrari->start();
echo $startOn;
$ferrari->forward();
echo $ferrari->forward();
echo "<br>La vitesse de la ferrari est de ".$ferrari->getCurrentSpeed(). " Km/heure !!!<br/>";
$ferrari->brake();
echo "<br> Sa vitesse est de ". $ferrari->getCurrentSpeed() . ' km/heure !!!<br/> ';
echo $ferrari->brake();

