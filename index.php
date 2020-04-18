<?php

require_once ("HighWay.php");

require_once ("MotorWay.php");

require_once ("Car.php");

require_once ("Bicycle.php");

require_once ("Bike.php");

require_once ("PedestrianWay.php");

require_once ("Truck.php");

require_once ("ResidentialWay.php");



$renault = new Car("black", 4, "diesel");

$renault->setCurrentSpeed(130);

$renault->setEnergyLevel(50);

$renault->setNbWheels(4);

var_dump($renault);


$volvo = new Car("orange", 4, "essence");


$a42 = new MotorWay();

$a42->addVehicle($renault);

$a42->addVehicle($volvo);

var_dump($a42);

$izasbike = new Bike("pink", 2, "manuel");
$izasbike->setCurrentSpeed(10);
$izasbike->setNbWheels(2);

$haniasbike = new Bike("red", 2, "manuel");
$haniasbike->setCurrentSpeed(10);
$haniasbike->setNbWheels(2);

$pedestr = new PedestrianWay();
$pedestr->addVehicle($izasbike);
$pedestr->addVehicle($haniasbike);
var_dump($pedestr);

$renaultTruck = new Truck(50, "yellow", 3, "essence");

$residential = new ResidentialWay();
$residential->addVehicle($renault);
$residential->addVehicle($izasbike);
$residential->addVehicle($renaultTruck);
var_dump($residential);












