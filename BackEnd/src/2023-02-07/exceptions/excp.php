<?php

$exception = new Exception('Page not found', 404);

var_dump($exception);

throw $exception;

echo 'hello';