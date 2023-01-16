<?php

require_once 'functions.php';

define('UPLOAD_DIR', __DIR__ . '/uploads');
define('ALLOWED_EXTENTIONS', ['png', 'jpg', 'jpeg', 'pdf']);

if (isset($_FILES['files'])) {
	for ($i=0; $i < count($_FILES['files']['name']); $i++) { 
		$file = [
            'name'     => $_FILES['files']['name'][$i],
            'type'     => $_FILES['files']['type'][$i],
            'tmp_name' => $_FILES['files']['tmp_name'][$i],
            'error'    => $_FILES['files']['error'][$i],
            'size'     => $_FILES['files']['size'][$i],
        ];

        try {
            handleFileUpload($file);
        } catch (Exception $e) {
            echo $e->getMessage() . "<br>\n";
        }
	}
}