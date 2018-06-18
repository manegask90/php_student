<?php

$num  = $_GET['file'];
$images = include __DIR__.'/data.php';

?>

<img src="images/<?php echo $images[$num]; ?>" alt="">
