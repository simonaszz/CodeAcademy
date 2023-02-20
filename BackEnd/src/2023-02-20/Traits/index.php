<?php

require_once 'vendor/autoload.php';

use App\Workable\{Driver, Pilot};

$student = new \App\Student('petras', 23, 'A1', 200);
$driver = new Driver('rokas', 37, 2000, 'B');
$driverV2 = new Driver('rokas', 37, 2500, 'A', 5);
$pilot = new Pilot('tomas', 25, 3500);

// var_dump($student, $driver, $driverV2, $pilot);

// printf("driver salary %f \n", $driver->getSalaryBonus());
// printf("driver 2 salary %f \n", $driverV2->getSalaryBonus());
// printf("pilot salary %f \n", $pilot->getSalaryBonus());
// 
foreach ([$student, $driver, $driverV2, $pilot] as $person) {
	echo $person->greetings() . "\n";
}