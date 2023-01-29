<?php

$image = imagecreatefromjpeg('background.jpeg');
$watermarkImage = imagecreatefrompng('watermark.png');

imagecopy(
	$image,
	$watermarkImage,
	
	0,
	0,

	0,
	0,

	imagesx($watermarkImage),
	imagesy($watermarkImage)
);

$fontPath = './open-sans/OpenSans-ExtraBoldItalic.ttf';

$text = 'This is rabbit!';
$colorRed = imagecolorallocate($image, 255, 0, 0);

imagefttext(
    $image,
    25,
    55,
    25,
    210,
    $colorRed,
    $fontPath,
    $text,
);

header('Content-Type: image/jpeg');
imagejpeg($image);

imagedestroy($image);
imagedestroy($watermarkImage);