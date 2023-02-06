<?php
$url = 'https://randomuser.me/api/?results=1';

$ch = curl_init($url);



curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);



$data = curl_exec($ch);


curl_close($ch);