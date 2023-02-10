<?php

require_once 'load.php';

define('OUTPUT_FILE', 'data/users-convert.csv');

function multiToSingleArr($arr, $map = [], $parentKey = null)
{
	foreach ($arr as $key => $value) {
		if ($parentKey) {
			$key = sprintf('%s.%s', $parentKey, $key);
		}

		if (is_array($value)) {
			$map = multiToSingleArr($value, $map, $key);
		} else {
			$map[$key] = $value;
		}
	}

	return $map;
}

$fp = fopen(OUTPUT_FILE, 'w');

fputcsv($fp, array_keys($data[0]));

foreach ($data as $userData) {
	fputcsv($fp, multiToSingleArr($userData));
}

fclose($fp);