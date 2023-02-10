<?php

function getUser($userId)
{
	return $userId == 4 ? ['name' => 'Kiril'] : null;
}

function getUserOrFail($userId)
{
	$user = getUser($userId);

	if (!$user) {
		throw new Exception('User not found', 1);
	}

	return $user;
}

// var_dump(getUserOrFail(1));

try {
	// var_dump(getUser(4));
	// var_dump(getUser(1));

	var_dump(getUserOrFail(4));
	var_dump(getUserOrFail(1));

	echo "Authenticated: Hello World!\n";
} catch (Exception $e) {
	// var_dump('catch => getMessage', $e->getMessage());
	// var_dump('catch => getCode', $e->getCode());
	// var_dump('catch => getFile', $e->getFile());
	// var_dump('catch => getLine', $e->getLine());
	// var_dump('catch => getTrace', $e->getTrace());
	
	echo sprintf('Message: %s, code: %d', $e->getMessage(), $e->getCode());
}