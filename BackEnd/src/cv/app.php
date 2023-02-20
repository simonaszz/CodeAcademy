<?php

// Panaudojus HTML formą iš praeitos užduoties, papildykite ją nuotraukos įkėlimo funkcija ir atvaizduokite gražų vartotojo profilį su visa įvesta informacija ir nuotrauka.

require_once 'functions.php';

// var_dump($_FILES);

define('UPLOAD_DIR', __DIR__ . '/uploads');
define('ALLOWED_EXTENTIONS', ['png', 'jpg', 'jpeg']);

if (isset($_FILES['files'])) {

    $file = [
        'name'     => $_FILES['files']['name'],
        'type'     => $_FILES['files']['type'],
        'tmp_name' => $_FILES['files']['tmp_name'],
        'error'    => $_FILES['files']['error'],
    ];

    try {
        $photo_path = uploadPhoto($file);
        echo "<img src='$photo_path'" . "<br>\n";
    } catch (Exception $e) {
        echo $e->getMessage() . "<br>\n";
    }
}

echo '<h1>Sveikiname uzsiregistravus</h1>';
echo '<h1>' . $_POST['fname'] . ' ' . $_POST['lname'] . '</h1>';
echo '<h3>' . $_POST['city'] . '</h3>';
echo '<ul>';
