<?php

$module = $_GET['page'] ?? 'index';

$modulePath = sprintf('%s/app/modules/%s.php', ROOT_PATH, $module);
$modulePath = realpath($modulePath);

if (str_starts_with($modulePath, ROOT_PATH) && is_file($modulePath)) {
	require_once $modulePath;
} else {
	http_response_code(404);
	
	echo 'Page not found';

	exit;
}