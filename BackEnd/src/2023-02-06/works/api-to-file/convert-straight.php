<?php

require_once 'load.php';

define('OUTPUT_FILE', 'data/users-convert-straight.csv');

$fp = fopen(OUTPUT_FILE, 'w');

fputcsv($fp, array_keys($data[0]));

foreach ($data as $userData) {
	$userDataParsed = array_map(function($data)	{
		return is_array($data) ? json_encode($data) : $data;
	}, $userData);

	fputcsv($fp, $userDataParsed);
}

fclose($fp);