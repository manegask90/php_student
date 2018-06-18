<?php

$images = include __DIR__.'/data.php';

?>
<html>

<head>
    <title>Фотогалерея</title>
    <link href="styles.css" rel="stylesheet">
</head>

<body>

    <?php foreach ($images as $num => $image) { ?>
    <div class="photo">
        <a href="/photo/image.php?file=<?php echo $num ?>">
            <img src="images/<?php echo $image ?>" alt="">
        </a>
    </div>
    <?php } ?>

</body>
</html>