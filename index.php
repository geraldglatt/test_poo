<?php
require_once('Bicycle.class.php');
require_once('Car.class.php');
require_once("Camion.class.php");

//Main

$bike = new Bicycle("Dark",2);
$bike->setCurrentSpeed(75);
$bike->setNbSeats(1);
$bike->setNbSeats(2);
echo $bike->forward(15);
echo "<br> Sa vitesse est de ". $bike->getCurrentSpeed(). ' km/heure<br/> ';
echo $bike->brake();
echo "<br> Sa vitesse est de ". $bike->getCurrentSpeed() . ' km/heure<br/> ';
echo $bike->brake();
var_dump($bike);

$bike2 = new Bicycle("White & blue",2);
$bike2->setCurrentSpeed(100);
$bike2->setNbSeats(1);
$bike2->setNbWheels(2);
var_dump($bike2);

//Instanciation d'un nouvel objet $Rockrider
$Rockrider = new Bicycle("yellow",2);
var_dump($Rockrider);

//Instanciation d'un nouvel objet tornado
$tornado = new Bicycle("Dark",2);
var_dump($tornado);
echo $tornado->forward(20)." tornado <br/>";

$ferrari = new car("red", 4 ,"Gasoline");
$ferrari->setNbWheels(4);
$ferrari->setCurrentSpeed(250);

$ferrari->forward(0);
echo $ferrari->forward(250);
echo "<br>La vitesse de la ferrari est de ".$ferrari->getCurrentSpeed(). " Km/heure !!!<br/>";
$ferrari->brake();
echo "<br> Sa vitesse est de ". $ferrari->getCurrentSpeed() . ' km/heure !!!<br/> ';
echo $ferrari->brake()."<br/>";

$car = new Car("green",4,"diesel");
echo $car->forward(175);
var_dump($car);
var_dump(Car::ALLOWED_ENERGIES);

$truck1 = new Camion(1000,"dark",5,"diesel");
echo $truck1->forward(70);
echo "<br>La vitesse du camion est de ".$truck1->getCurrentSpeed()." km/heure !!! lorsque son chargement est ".$truck1->isFull(0)."<br/>";
echo $truck1->forward(90);
echo "Sa vitesse est de ".$truck1->getCurrentSpeed()." km/heure lorsque son chargement est ".$truck1->isFull(1)."<br/>";
echo $truck1->brake();
var_dump($truck1);

$testla = new Car("red",5,"electric");
$porsche = new Car("blue",2,"gasoline");
$schoolBus = new Camion(1000,"green",50,"diesel");







