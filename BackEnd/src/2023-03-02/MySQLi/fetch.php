<?php

require_once './connection.php';

$query = '
	SELECT 
		`id`,
		`email`,
		`first_name`,
		`last_name`
	FROM 
		`users`';

// https://www.php.net/manual/en/mysqli-result.fetch-all.php
// $result = $mysqli->query($query);
// $resultFetchAll = $result->fetch_all(MYSQLI_BOTH);

// var_dump($resultFetchAll);
// var_dump($resultFetchAll[0]['email']);

// https://www.php.net/manual/en/mysqli-result.fetch-array.php
// $result = $mysqli->query($query);
// $resultFetchArray = $result->fetch_array(MYSQLI_ASSOC);

// var_dump($resultFetchArray);

// while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
// 	var_dump($row, $row['email']);
// }

// https://www.php.net/manual/en/mysqli-result.fetch-object.php
$result = $mysqli->query($query);
// $resultFetchObject = $result->fetch_object();

// var_dump($resultFetchObject);

while ($row = $result->fetch_object()) {
	var_dump($row, $row->email);
}

