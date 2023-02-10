<?php

require_once 'classes/DatabaseConnector.php';


// bootstrap.php
$dbConfig = [
	'host' => 'localhost',
	'user' => 'root',
	'pass' => 'admin'
];

DatabaseConnector::connect($dbConfig['host'], $dbConfig['user'], $dbConfig['pass']);

// Modules/UserRegister.php
// $databaseConnection = new DatabaseConnector($dbConfig['host'], $dbConfig['user'], $dbConfig['pass'], $dbConfig['port']);
$databaseConnection = DatabaseConnector::getInstance();
var_dump($databaseConnection);

// Services/SendUserOrderConfirmedNotification.php
// $databaseConnection = new DatabaseConnector($dbConfig['host'], $dbConfig['user'], $dbConfig['pass'], $dbConfig['port']);
$databaseConnection = DatabaseConnector::getInstance();
var_dump($databaseConnection);

// Shop.php
// $databaseConnection = new DatabaseConnector($dbConfig['host'], $dbConfig['user'], $dbConfig['pass'], $dbConfig['port']);
$databaseConnection = DatabaseConnector::getInstance();
var_dump($databaseConnection);