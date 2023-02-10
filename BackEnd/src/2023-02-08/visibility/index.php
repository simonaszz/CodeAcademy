<?php

require_once './classes/User.php';
require_once './classes/Visibility.php';

$visibility = new Visibility();

$visibility->show();

$visibility->publicVisibility = 'pseudo-private after init';

var_dump($visibility->publicVisibility);
// var_dump($visibility->privateVisibility); // Fatal error: Uncaught Error: Cannot access private property Visibility::$privateVisibility
// var_dump($visibility->protectedVisibility); // Fatal error: Uncaught Error: Cannot access protected property Visibility::$protected


$user = new User('kkkkk', 'ccccc', 123456);

var_dump($user->getFirstName());
var_dump($user->getLastName());
// var_dump($user->code); // Fatal error:  Uncaught Error: Cannot access private property User::$code
var_dump($user->getCode());

// $user->firstName = 'a';
$user->setFirstName('aaaaaa');

// $user->lastName = 'b';
$user->setLastName('bbbbbbb');

// $user->code = 567; // Fatal error:  Uncaught Error: Cannot access private property User::$code

var_dump($user->getFirstName());
var_dump($user->getLastName());
var_dump($user->getCode());
