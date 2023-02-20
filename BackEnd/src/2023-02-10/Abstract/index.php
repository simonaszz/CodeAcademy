<?php

require_once 'classes/TravelOption.php';
require_once 'classes/Boat.php';
require_once 'classes/Car.php';
require_once 'classes/Plane.php';
require_once 'classes/Destination.php';

$destination = new Destination('Vilnius', 'Klaipeda');

$vehicles = [
	new Car(2, 4),
	new Boat(2, 4),
	new Plane(2, 4),
];

foreach ($vehicles as $vehicle) {
	printf("%s => %f, %f\n", $vehicle->getClassName(), $vehicle->getPriceForOneKm(), $vehicle->getDistancePrice($destination));
}