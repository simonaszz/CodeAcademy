<?php
$cURLConnection = curl_init();
curl_setopt($cURLConnection, CURLOPT_URL, 'https://randomuser.me/api/');
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
$apiData = curl_exec($cURLConnection);
curl_close($cURLConnection);