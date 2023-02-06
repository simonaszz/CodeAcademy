<?php

// https://www.php.net/manual/en/book.session.php

// session_name('codeacademy-session');

// session_save_path(__DIR__ . '/sessions');

session_start();

if (!isset($_SESSION['timestamp'])) {
	$_SESSION['timestamp'] = time();
}

if (!isset($_SESSION['user_agent'])) {
	$_SESSION['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
}

echo $_SESSION['timestamp'] . "<br>\n";
echo $_SESSION['user_agent'] . "<br>\n";

// $_SESSION['user'] = [
// 	'id' => 365,
// 	'username' => 'kirilc',
// 	'age' => 32,
// ];

if (isset($_SESSION['user'])) {
	echo "Auth successfull <br>\n";
} else {
	echo "Auth fail <br>\n";
}