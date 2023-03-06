<?php
$post = $_POST['shortUrl'];
$url = $_POST['url'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <label>Shorted url:</label>
        <input type="text" name="shortUrl" id="shortUrl">
        <br>
        <label>url to short</label>
        <input type="text" name="url" id="url" value="http://">
        <br>
        <button type="submit">Submit</button>

    </form>
    <?php echo "$url"; ?>
</body>

</html>