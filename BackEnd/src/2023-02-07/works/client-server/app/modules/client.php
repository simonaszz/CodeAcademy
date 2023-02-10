<?php

$result = doHttpRequest('https://randomuser./api/?format=csv&results=10');

if (isset($result['response']['body']) && $result['httpStatusCode'] == 200) {
	$result = doHttpRequest('http://nginx/?page=server', [
		'data' => $result['response']['body']
	]);

	echo 'Completed';
} else {
	throw new Exception('Error Processing Request', 400);
	
}