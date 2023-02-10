<?php

define('INPUT_FILE', 'data/users.json');

$url = 'https://randomuser.me/api/?results=100';

if (!file_exists(INPUT_FILE)) {
	file_put_contents(INPUT_FILE, file_get_contents($url));
}

$url = INPUT_FILE;

$data = file_get_contents($url);
$data = json_decode($data, true);
$data = $data['results'] ?? [];