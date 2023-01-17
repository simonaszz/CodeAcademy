<?php

define('UPLOAD_DIR', __DIR__ . '/uploads');

// NGINX => http://localhost/2023-01-17/load-files/uploads/2023/01/16/27mryZx9gdv0mXPG.jpeg
// NGINX => http://localhost/2023-01-17/load-files/uploads/2023/01/16/ZS5fLDVaouG4l28k.pdf
// 
// NGINX => http://localhost/2023-01-17/load-files/uploads/2023/01/17/Bv4RCT137cm9dmck.jpeg
// NGINX => http://localhost/2023-01-17/load-files/uploads/2023/01/17/zaIFbSsJHucti1nx.pdf
// 
// PHP => http://localhost/2023-01-17/load-files/index.php?name=Bv4RCT137cm9dmck.jpeg
// PHP => http://localhost/2023-01-17/load-files/index.php?name=zaIFbSsJHucti1nx.pdf
// 
// PHP => http://localhost/2023-01-17/load-files/?name=Bv4RCT137cm9dmck.jpeg
// PHP => http://localhost/2023-01-17/load-files/?name=zaIFbSsJHucti1nx.pdf
// 
// PHP => http://localhost/2023-01-17/load-files/index.php?name=27mryZx9gdv0mXPG.jpeg&date=2023-01-16
// PHP => http://localhost/2023-01-17/load-files/index.php?name=ZS5fLDVaouG4l28k.pdf&date=2023-01-16
// 
// PHP => http://localhost/2023-01-17/load-files/?name=27mryZx9gdv0mXPG.jpeg&date=2023-01-16
// PHP => http://localhost/2023-01-17/load-files/?name=ZS5fLDVaouG4l28k.pdf&date=2023-01-16
// 
// PHP => http://localhost/2023-01-17/load-files/?name=ZS5fLDVaouG4l28k.pdf&date=2023-01-16&download
// PHP => http://localhost/2023-01-17/load-files/?name=27mryZx9gdv0mXPG.jpeg&date=2023-01-16&download

if (isset($_GET['name'])) {
	$date = $_GET['date'] ?? date('Y-m-d');
	$date = str_replace('-', '/', $date);

	$filePath = sprintf('%s/%s/%s', UPLOAD_DIR, $date, $_GET['name']);

	if (is_file($filePath)) {
		// https://www.php.net/manual/en/function.header
		// https://www.php.net/manual/en/function.mime-content-type.php
		header('Content-Type: ' . mime_content_type($filePath));
		header('Content-Length: ' . filesize($filePath));

		if (isset($_GET['download'])) {
		    header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
		}

		// https://www.php.net/manual/en/function.readfile.php
		readfile($filePath);
	} else {
		http_response_code(404);
		echo 'File not found';
	}

	exit;
}