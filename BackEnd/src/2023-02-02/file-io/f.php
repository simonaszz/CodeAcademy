<?php

$path = __DIR__ . '/data/posts.json';

$handle = fopen($path, 'r');
// $content = fread($handle, 10);
// $content = fread($handle, 100);
$content = fread($handle, filesize($path));

fclose($handle);

$content = json_decode($content, true);

var_dump($content);