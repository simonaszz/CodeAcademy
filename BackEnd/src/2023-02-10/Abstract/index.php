<?php

require_once 'classes/TravelOption.php';
require_once 'classes/Boat.php';
require_once 'classes/Car.php';
require_once 'classes/Plane.php';
require_once 'classes/Destination.php';

$destination = new Destination('Vilnius', 'Klaipeda');

$travelByCar = new Car(2, 4);
$travelByBoat = new Boat(10, 10);
$travelByPlane = new Plane(10, 2);

var_dump($travelByCar->getPriceForOneKm(), $travelByCar->getDistancePrice($destination));
var_dump($travelByBoat->getPriceForOneKm(), $travelByBoat->getDistancePrice($destination));
var_dump($travelByPlane->getPriceForOneKm(), $travelByPlane->getDistancePrice($destination));