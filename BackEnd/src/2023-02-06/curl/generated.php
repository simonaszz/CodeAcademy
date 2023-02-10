<?php

// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.delfi.lt/login/v2/graphql');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{
  "query": "mutation login_api_login($input: LoginInput!) {\n  data: login(input: $input) {\n    status\n    token\n  }\n}\n",
  "variables": {
    "input": {
      "email": "hello@nonamez.name",
      "password": "klaipeda",
    }
  }
}');
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = [];
$headers[] = 'Authority: api.delfi.lt';
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
$headers[] = 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

var_dump($result);