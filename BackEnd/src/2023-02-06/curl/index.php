<?php

require_once 'functions.php';

$urlMeteo = 'https://api.meteo.lt/v1/stations/vilniaus-ams/observations/' . date('Y-m-d');
$urlRandomUserJson = 'https://randomuser.me/api/?results=100';
$urlRandomUserCsv = 'https://randomuser.me/api/?results=100&format=csv';
$url15min = 'https://15min.lt';
$urlDelfi = 'https://api.delfi.lt/login/v2/graphql';

// file_put_contents('data/vln-observations.json', getContent($urlMeteo)['response']['body']);
// file_put_contents('data/users.json', getContent($urlRandomUserJson)['response']['body']);
// 
// --------------------------------- //
// 
// $response = getContent($url15min);

// var_dump($response['response']['headers']);

// file_put_contents('data/15min.html', $response['response']['body']);

// --------------------------------- //

$headers = [];
$headers[] = 'Accept: */*';
$headers[] = 'Accept-Language: en-GB,en;q=0.9';
$headers[] = 'Cache-Control: no-cache';
$headers[] = 'Content-Type: application/json';
$headers[] = 'Origin: https://www.delfi.lt';
$headers[] = 'Pragma: no-cache';
$headers[] = 'Referer: https://www.delfi.lt/';
$headers[] = 'Sec-Ch-Ua: \"Not_A Brand\";v=\"99\", \"Google Chrome\";v=\"109\", \"Chromium\";v=\"109\"';
$headers[] = 'Sec-Ch-Ua-Mobile: ?0';
$headers[] = 'Sec-Ch-Ua-Platform: \"macOS\"';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: same-site';
$headers[] = 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KH/.]]';

$data =  '{
  "query": "mutation login_api_login($input: LoginInput!) {\n  data: login(input: $input) {\n    status\n    token\n  }\n}\n",
  "variables": {
    "input": {
      "email": "hello@nonamez.name",
      "password": "klaipeda",
    }
  }
}';

$response = getContent($urlDelfi, $data, $headers);

var_dump($response);