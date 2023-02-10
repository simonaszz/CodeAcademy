<?php

require_once 'functions.php';

$url = 'https://api.meteo.lt/v1/stations/vilniaus-ams/observations/' . date('Y-m-d');

// $data = file_get_contents($url);

// create a new cURL resource
$ch = curl_init($url);

// set URL and other appropriate options
// curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

// grab URL and pass it to the browser
$response = curl_exec($ch);

// close cURL resource, and free up system resources
curl_close($ch);

// var_dump($response);

// list($headers, $body) = explode("\r\n\r\n", $response);
// https://stitcher.io/blog/array-destructuring-with-list-in-php
[$headers, $body] = explode("\r\n\r\n", $response);

// var_dump($headers, $body);

$data = json_decode($body, true);

// var_dump($data);

// HTTP/1.1 200 OK
// Date: Mon, 06 Feb 2023 18:40:00 GMT
// Server: Apache
// Strict-Transport-Security: max-age=31536000; includeSubDomains
// Cache-Control: no-cache, private
// X-RateLimit-Limit: 120
// X-RateLimit-Remaining: 119
// Transfer-Encoding: chunked
// Content-Type: application/json

$headers = explode("\n", $headers);

// var_dump($headers);

$firstLine = array_shift($headers);

$headers = array_map(function($h) {
	return explode(':', $h);
}, $headers);

// var_dump($headers);

var_dump($headers, getContent($url)['response']['body']);