<?php

// https://www.php.net/manual/en/reserved.variables.server.php

// var_dump($_SERVER);
var_dump($_SERVER['HTTP_USER_AGENT'] ?? null);
// https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.coalesce
var_dump($_SERVER['HTTP_X_REQUESTED_WITH'] ?? null);

// https://www.php.net/manual/en/reserved.variables.request.php
var_dump(['$_REQUEST' => $_REQUEST]);
var_dump($_REQUEST['name'] ?? null);
var_dump($_REQUEST['age'] ?? null);

var_dump(['$_GET' => $_GET]);
var_dump(['$_POST' => $_POST]);

// var_dump(['GET:city' => $_GET['city']]); // Warning:  Undefined array key "city"

if (isset($_GET['city'])) {
	var_dump(['GET:city' => $_GET['city']]);
}

if (array_key_exists('name', $_POST)) {
	var_dump(['POST:name' => $_POST['name']]);
}