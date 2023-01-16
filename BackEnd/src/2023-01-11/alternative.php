<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Hello World!</h1>
	<?php if (rand(0,2)) { ?>
	<strong>Hello, Kiril</strong>
	<?php } else { ?>
	<strong>Who are you?</strong>
	<?php } ?>
	<!-- https://www.php.net/manual/en/control-structures.alternative-syntax.php -->
	<h1>Alternative hello World!</h1>
	<?php if (rand(0,2)):  ?>
	<strong>Hello, Kiril</strong>
	<?php else: ?>
	<strong>Who are you?</strong>
	<?php endif; ?>
</body>
</html>