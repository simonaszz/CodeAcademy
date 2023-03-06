<?php

define('ROOT_PATH', dirname(__DIR__));

ini_set('display_errors', 1);

ini_set('log_errors', 1);
ini_set('error_log', sprintf('%s/logs/error-%s.log', ROOT_PATH, date('Y-m-d')));

require_once ROOT_PATH . '/app/helpers.php';

ob_start();

try {
	$envFilePath = ROOT_PATH . '/.env';

	if (file_exists($envFilePath)) {
		define('ENV_FROM_FILE', parse_ini_file($envFilePath));
	} else {
		throw new Exception('Env file not found');
	}

	if (env('APP_DEBUG', false)) {
		ini_set('display_errors', 1);
	} else {
		ini_set('display_errors', 0);
	}

	require_once ROOT_PATH . '/app/router.php';

	ob_end_flush();
} catch(Exception $error) {
	ob_end_clean();

	$isXmlHttpRequest = isset($_SERVER['HTTP_X_REQUESTED_WITH']) ? strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' : false;

	$message = $error->getMessage() ?? 'Sorry. Try again later...';
	$code = $error->getCode() ?? 500;

	if ($isXmlHttpRequest) {
		ajaxResponse(message: $message, httpResponseCode: $code);
	} else {
		http_response_code($code);
		echo 'Error: ' . $message;
	}
}