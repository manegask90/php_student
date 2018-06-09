<html>
<head>
    <title>Массивы</title>

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


<ul>
    <li>
        <a href="/?id=1">Cat</a>
    </li>
    <li>
        <a href="/?id=2">Dog</a>
    </li>
    <li>
        <a href="/?id=3">Snake</a>
    </li>
    <li>
        <a href="/?id=4">Bear</a>
    </li>
</ul>

<image src="images/<?php echo $images[$img_src]; ?>" ></image>
</body>
</html>
