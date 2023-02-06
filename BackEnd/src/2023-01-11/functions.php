<?php

$name = 'Kiril';

// https://www.php.net/manual/en/functions.user-defined.php
function square(int $number) {
	// var_dump($name); // Warning: Undefined variable

	$squareOfNumber = $number * $number;

	return $squareOfNumber;
}

echo square(7);

echo "<br>\n";

// https://www.php.net/manual/en/functions.anonymous.php
$anonymousVarDump = function(string $value) {
	var_dump($value);
};

$anonymousVarDump($name);

$workers = [
	[
		'name' => 'Antanas',
		'salary' => 410
	],

	[
		'name' => 'Bronius',
		'salary' => 420
	],

	[
		'name' => 'Česlovas',
		'salary' => 430
	]
];

var_dump($workers);

$bonus = 300;

// foreach ($workers as $key => $worker) {
// 	$workers[$key]['salary'] += $bonus;
// }

// foreach ($workers as & $worker) {
// 	$worker['salary'] += $bonus;
// }

// https://www.php.net/manual/en/function.array-map.php
$workersWithBonus = array_map(function($worker) use($bonus) {
	$worker['salary'] += $bonus;

	return $worker;
}, $workers);

echo "workersWithBonus<br>\n";

var_dump($workersWithBonus);

// https://www.php.net/manual/en/functions.arrow.php
$workersWithBonusArrow = array_map(fn($worker) => $worker['salary'] += $bonus, $workers);

echo "workersWithBonusArrow<br>\n";
var_dump($workersWithBonusArrow);

// https://www.php.net/manual/en/functions.arguments.php#functions.named-arguments

function createUser($name, $surname = null, $address = null, $city = null, $email = null, $phone = null)
{
	// https://www.php.net/manual/en/function.compact.php
	return compact('name', 'surname', 'address', 'city', 'email', 'phone');
}

var_dump(createUser('Kiril', null, null, null, 'hello@nonamez.name'));
var_dump(createUser('Kiril', 'hello@nonamez.name'));
var_dump(createUser('Kiril', email: 'hello@nonamez.name'));
var_dump(createUser('Kiril', phone: '+370612345678'));