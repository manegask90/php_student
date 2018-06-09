<?php
$img_src = $_GET['id'];

$images = [
    1 => 'cat.jpg',
    2 => 'dog.jpg',
    3 => 'snake.jpg',
    4 => 'bear.jpg'
];

?>

<image src="images/<?php echo $images[$img_src]; ?>" ></image>

