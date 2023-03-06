<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once('./chapter2/Comment.php');
    $comment = new Comment('This is some comment text', 10);


    ?>
    <p>
        <?php echo $comment->text; ?> by user <?php echo $comment->userId; ?>
    </p>
</body>

</html>