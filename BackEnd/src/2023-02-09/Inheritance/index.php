<?php

require_once __DIR__ . '/classes/Animal.php';
require_once __DIR__ . '/classes/Rabbit.php';
require_once __DIR__ . '/classes/Cat.php';
require_once __DIR__ . '/classes/Dog.php';
require_once __DIR__ . '/classes/Parrot.php';

// $animal = new Animal();

// var_dump($animal);

$animals = [
	new Rabbit('White Rabbit', 'tttttt'),
	
	new Cat('Pukis'),
	
	new Dog('Reksas', 'AU AU AU AU'),
	new Dog('Pikis', 'au au au au au au au au'),

	new Parrot('Kiesha'),
	new Parrot('Kiesha', 'Miau'),
	new Parrot('Kiesha', 'AU AU AU AU'),
	new Parrot('Kiesha', 'au au au au au au au au'),
];

foreach ($animals as $animal) {
	$lifeTime = $animal->getCreatedAt() + $animal->getLifeTime();

	var_dump($animal->getName(), $animal->getSound(), date('Y-m-d', $lifeTime));

}