<?php

if (!function_exists('dd')) {
	function dd() {
		array_map(function($x) {
			var_dump($x);
		}, func_get_args());

		die(0);
	}
}

if (!function_exists('asset')) {
	function asset($asset) {
		$manifestPath = ROOT_PATH . '/public/mix-manifest.json';

		if (!is_file($manifestPath)) {
			throw new Exception('Manifest file not found', 500);
		}

		$manifest = file_get_contents($manifestPath);
		$manifest = json_decode($manifest, TRUE);

		if (is_array($manifest) && array_key_exists($asset, $manifest)) {
			if (is_file(sprintf('%s/public/%s', ROOT_PATH, $asset))) {
				return $manifest[$asset];
			}
		}

		throw new Exception('Asset file not found', 500);
	}
}

if (!function_exists('env')) {
	function env($key, $default = NULL)
	{
		if (array_key_exists($key, ENV_FROM_FILE)) {
			return ENV_FROM_FILE[$key];
		}

		return $default;
	}
} else {
	throw new Exception('"env" alerdy exists');
}

if (!function_exists('generateRandomString')) {
	// https://stackoverflow.com/questions/4356289/php-random-string-generator
	function generateRandomString($length = 10)
	{
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';

		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}

		return $randomString;
	}
}

if (!function_exists('ajaxResponse')) {
	function ajaxResponse($data = NULL, string $message = NULL, int $httpResponseCode = 200, array $errors = [])
	{
		$data = [
			'data'    => $data,
			'errors'  => $errors,
			'message' => $message,
		];

		header('Content-type: application/json');

		http_response_code($httpResponseCode);

		echo json_encode($data);

		exit;
	}
}

if (!function_exists('doHttpRequest')) {
	function doHttpRequest(
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

		curl_setopt($curlHandle, CURLOPT_COOKIEJAR, ROOT_PATH . '/session');
		curl_setopt($curlHandle, CURLOPT_COOKIEFILE, ROOT_PATH . '/session');

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
}