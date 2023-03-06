<?php

require_once './connection.php';

// https://www.php.net/manual/en/mysqli-stmt.prepare.php

// $email = 'mwoollends5@amazon.co.uk';
$email = 'mwoollends5@amazon.co.uk\' OR is_admin = \'1';

$query = "
	SELECT 
		*
	FROM 
		`users`

	WHERE
		`email` = '{$email}'
";

// var_dump($query);

$result = $mysqli->query($query);
$resultFetchAll = $result->fetch_all(MYSQLI_ASSOC);

// var_dump($resultFetchAll);

// =================== //

$query = '
	SELECT 
		*
	FROM 
		`users`
	WHERE
		`email` = ?';

// var_dump($query);

$stmt = $mysqli->prepare($query);

$stmt->execute([
	$email
]);

$result = $stmt->get_result();
$resultFetchAllPrepared = $result->fetch_all(MYSQLI_ASSOC);

// var_dump($resultFetchAllPrepared);

// =================== //

$stmt = $mysqli->prepare('SELECT * FROM `users` WHERE `email` = ? AND `first_name` = ?');

$stmt->bind_param('ss', $email, $name);

$email = 'fhairsine4@1688.com';
$name = 'Florenza';

$stmt->execute();

$result = $stmt->get_result();
$result = $result->fetch_all(MYSQLI_ASSOC);

var_dump($result);
