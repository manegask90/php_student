<html>
<head>
    <title>PHP</title>

    <link href="style.css" rel="stylesheet">
</head>
<body>

<?php
$img_src = $_GET['id'];

$images = [
    1 => 'cat.jpg',
    2 => 'dog.jpg',
    3 => 'snake.jpg',
    4 => 'bear.jpg'
];

?>


<!--<ul>-->
<!--    <li>-->
<!--        <a href="/?id=1">Cat</a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a href="/?id=2">Dog</a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a href="/?id=3">Snake</a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a href="/?id=4">Bear</a>-->
<!--    </li>-->
<!--</ul>-->
<!---->
<!--<image src="images/--><?php //echo $images[$img_src]; ?><!--" ></image>-->

<form action="/upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="newfile">
    <input type="submit">
</form>
<?php

//$res   = scandir(__DIR__ );
//var_dump($res);
//$res[] = 'Custom';
//
//$str = implode("\n", $res);
//
//$data = file_put_contents(__DIR__ . '/db.txt', $res);

?>
</body>
</html>
