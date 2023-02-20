<?php

require_once 'interfaces/CarTemplate.php';
require_once 'interfaces/VehicleTemplate.php';

require_once 'classes/Vehicle.php';
require_once 'classes/Bmw.php';
require_once 'classes/Toyota.php';
require_once 'classes/Ford.php';
require_once 'classes/Garage.php';
require_once 'classes/Boat.php';

$garage = new Garage();

$vehicles = [
	new Bmw('m3', 'gasoline'),
	new Toyota('yaris', 'gasoline'),
	new Ford('mustang', 'gasoline'),
	// new Boat(),
];

foreach ($vehicles as $vehicle) {
	// printf("%s => %s<br>\n", get_class($vehicle), $vehicle->getModel());

	$garage->add($vehicle);
}

var_dump($garage->getCars());