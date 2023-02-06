<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php if (isset($_POST['name'])): ?>
	<h1><?php echo $_POST['name']; ?></h1>
	<?php endif;?>
	
	<!-- <form action="index.php" method="POST"> -->
	<form method="POST">
		<p>Your name: <input type="text" name="name" value="<?php echo $_POST['name'] ?? ''; ?>"></p>
		<p>Your age: <input type="number" name="age" value="<?php echo $_POST['age'] ?? ''; ?>"></p>
		<p>
			<button>Submit</button>
		</p>
	</form>
</body>
</html>