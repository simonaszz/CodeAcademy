<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$inputData = [];

	if (strpos($_SERVER['CONTENT_TYPE'], 'multipart/form-data') !== FALSE) {
		$inputData = $_POST;
	} else if ($_SERVER['CONTENT_TYPE'] == 'application/json') {
		$inputJson = file_get_contents('php://input');

		$inputData = json_decode($inputJson);
	} else {
		http_response_code(400);
		exit;
	}

	require_once 'upload.php';

	if (isset($downloadFilePath)) {
		$inputData['photo'] = $downloadFilePath;
	}

	if ($_SERVER['HTTP_ACCEPT'] == 'application/json') {
		http_response_code(200);

		header('Content-Type: application/json');

		echo json_encode([
			'message' => 'profile created successfuly',
			'status' => true,
			'data' => $inputData
		]);

		exit;
	} else {
		require_once 'views/profile.phtml';
	}
} else {
	require_once 'views/index.phtml';
}
