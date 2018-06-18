<?php

require __DIR__ . '/func.php';
require __DIR__ . '/calc.php';

?>

<html>

<head>
    <title>Калькулятор</title>
</head>

<body>

<form action="/calc/index.php" method="post">
    <input type="number" name="x" value="<?php echo $x; ?>" step="any">
    <select name="op">
        <?php
        foreach ($operations as $operation ) { ?>
            <option value="<?php echo $operation; ?>" <?php if ($operation==$op) { ?> selected <?php } ?>><?php echo $operation; ?></option>
        <?php } ?>
    </select>
    <input type="number" name="y" value="<?php echo $y; ?>" step="any">
    <input type="submit" value="=">
    <?php echo $res ?>
</form>

</body>

</html>