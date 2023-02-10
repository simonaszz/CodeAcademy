<?php

function getContent(
	string $url,
	$data = false,
	array $customHeaders = []
): array
{
	$url = trim($url);

	$curlHandle = curl_init($url);

	curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curlHandle, CURLOPT_HEADER, true);
	curl_setopt($curlHandle, CURLOPT_FOLLOWLOCATION, true); 
	curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, false);

	curl_setopt($curlHandle, CURLOPT_COOKIESESSION, true);

	curl_setopt($curlHandle, CURLOPT_COOKIEJAR, 'session');
	curl_setopt($curlHandle, CURLOPT_COOKIEFILE, 'session');

	if (is_null($customHeaders) || array_key_exists('Referer', $customHeaders) == false) {
		curl_setopt($curlHandle, CURLOPT_AUTOREFERER, true);
	}

	if (isset($customHeaders['User-Agent'])) {
		curl_setopt($curlHandle, CURLOPT_USERAGENT, $customHeaders['User-Agent']);

		unset($customHeaders['User-Agent']);
	}
	
	if (isset($customHeaders['Cookie'])) {
		curl_setopt($curlHandle, CURLOPT_COOKIE, $customHeaders['Cookie']);

		unset($customHeaders['Cookie']);
	}

	if ($data) {
		if (is_array($data)) {
			$data = http_build_query($data);
		}

		if (is_string($data) && strlen($data) > 0) {
			curl_setopt($curlHandle, CURLOPT_POST, true);
			curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $data);
		}
	}

	if (count($customHeaders) > 0) {
		$headers = [];

		foreach ($customHeaders as $key => $header) {
			$headers[] = sprintf('%s: %s', $key, $header);
		}

		curl_setopt($curlHandle, CURLOPT_HTTPHEADER, $headers);
	}

	curl_setopt($curlHandle, CURLINFO_HEADER_OUT, true);

	$response = curl_exec($curlHandle);

	$headerSize = curl_getinfo($curlHandle, CURLINFO_HEADER_SIZE);
	$headers = substr($response, 0, $headerSize);
	$body = substr($response, $headerSize);

	$request = curl_getinfo($curlHandle);
	$httpStatusCode = curl_getinfo($curlHandle, CURLINFO_HTTP_CODE);

	curl_close($curlHandle);

	$headerParts = [];

	$headers = trim($headers);
	$headers = explode("\r\n", $headers);

	array_shift($headers);

	foreach ($headers as $line) {
		if (strlen($line) == 0) {
			continue;
		}

		if (strpos($line, ': ') === false) {
			$headerParts[] = $line;
		} else {
			$middle = explode(': ', $line, 2);

			$headerParts[trim($middle[0])] = trim($middle[1]);
		}
	}

	return [
		'httpStatusCode' => $httpStatusCode,
		'request' => $request,
		'response' => [
			'headers' => $headerParts,
			'body' => $body
		]
	];
}