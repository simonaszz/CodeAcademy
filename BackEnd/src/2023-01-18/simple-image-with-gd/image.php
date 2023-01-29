<?php

$text = $_GET['text'] ?? 'Hello World!';

// https://www.php.net/manual/en/function.imagecreate.php
$image = imagecreate(300, 300);

// https://www.php.net/manual/en/function.imagecolorallocate.php
imagecolorallocate($image, 0, 0, 0);
$colorGreenYellow = imagecolorallocate($image, 204, 255, 51);

// https://www.php.net/manual/en/function.imagestring.php

imagestring($image, 3, 110, 150, $text, $colorGreenYellow);

// header('Content-Type: image/png');
// imagepng($image);

// https://www.php.net/manual/en/function.imagejpeg.php
header('Content-Type: image/jpeg');
imagejpeg($image);

imagedestroy($image);