<?php

$data = file_get_contents(__DIR__ . '/data/posts.json');
$data = json_decode($data, true);

// var_dump($data);

// ---------------- //

$user = [
	'name' => 'K',
	'surname' => 'Ch',
	'age' => 32,
];

// file_put_contents(__DIR__ . '/data/user.json', json_encode($user));
// file_put_contents(__DIR__ . '/data/user.json', json_encode($user), FILE_APPEND);
file_3_contents(__DIR__ . '/data/user.json', print_r($user, true));

// ---------------- //

$data = file_get_contents('https://jsonplaceholder.typicode.com/users');
$users = json_decode($data, true);

// var_dump($users);

file_put_contents(__DIR__ . '/data/users-data.json', $data);
file_put_contents(__DIR__ . '/data/users-encoded.json', json_encode($users));
file_put_contents(__DIR__ . '/data/users-encoded-pretty.json', json_encode($users, JSON_PRETTY_PRINT));
file_put_contents(__DIR__ . '/data/users-serialized', serialize($users));