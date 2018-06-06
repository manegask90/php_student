<html>
<head>
    <title>Массивы</title>
</head>
<body>


<?php

$x = $_POST['x'];
$y = $_POST['y'];

$res = $x + $y;
?>
<form action="/index.php" method="post">
    <input type="number" name="x" value="<?php echo (isset($_POST['x']))?$_POST['x']:'';?>" >
    +
    <input type="number" name="y" value="<?php echo (isset($_POST['y']))?$_POST['y']:'';?>" >
    <input type="submit" value="=">
    <?php echo $res; ?>
</form>

</body>
</html>
