<?php

require_once 'classes/User.php';

User::setAge(32);

$user = new User();

$user->setName('Kiril');

var_dump($user->name);

var_dump(User::$age);
var_dump($user);
var_dump($user->getGreetings());

User::setAge(39);

var_dump($user->getGreetings());

User::setAge(40);

foreach (['A', 'B', 'C'] as $name) {
	$user = new User();

	$user->setName($name);

	var_dump($user->getGreetings());
}