<?php

// error_reporting(0);

echo 'before<br>';

// // https://www.php.net/manual/en/function.include.php
// include 'a.php';
// include 'a.php';
// include 'a.php';
// include 'a.php';

// // https://www.php.net/manual/en/function.require.php
// require 'b.php';
// require 'b.php';
// require 'b.php';
// require 'b.php'; 

// include 'c.php'; // Warning: include(c.php): Failed to open stream:
// require 'c.php'; // Fatal error: Uncaught Error: Failed opening required 'c.php' 

// https://www.php.net/manual/en/function.require-once.php
require_once 'b.php';
require_once 'b.php';
require_once 'b.php';
require_once 'b.php';
require_once 'b.php';
require_once 'b.php';

echo 'hello world';