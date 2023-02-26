<?php

var_dump(file_get_contents('https://randomuser.me/api/'));

$path = 'https://randomuser.me/api/';

$handle = fopen($path, 'r');
$contents = '';

while (!feof($handle)) {
    $contents .= fread($handle, 8192);
}

fclose($handle);


var_dump($content);

// $cURLConnection = curl_init();

// curl_setopt($cURLConnection, CURLOPT_URL, 'https://randomuser.me/api/');
// curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

// $phoneList = curl_exec($cURLConnection);

// curl_close($cURLConnection);

// var_dump($phoneList);