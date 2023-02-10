<?php

declare(strict_types=1);

require_once '/app/2023-02-07/exceptions/excp-4.php';

try {
	require_once __DIR__ . '/classes/User.php';

	$userA = new User();

	$userB = new User('Mantas', 'Povilaitis');

	// $userC = new User('Gedas', 'Jonaitis');
	$userC = new User();

	// overwrite
	$userC->firstName = 'K';
	$userC->lastName = 'Č';
	
	// new User(1, 2);

	foreach ([$userA, $userB, $userC] as $user) {
		// var_dump($user->getFirstName(), $user->getLastName());
		var_dump($user->getFullName());

		$user->showConstants();
	}

	var_dump(User::CONSTANT);
	var_dump(User::CONSTANT_SUM);
	var_dump(User::CONSTANT_ARR);

	echo "<br>\n";
} catch (Exception $e) {
	if (strpos($e->getMessage(), 'require_once') !== FALSE) {
		echo 'File not found';
	} else {
		throw $e;
	}
}