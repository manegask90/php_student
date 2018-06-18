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
        <option value="+"<?php if ('+'==$op) { ?> selected <?php } ?>>+</option>
        <option value="-"<?php if ('-'==$op) { ?> selected <?php } ?>>-</option>
        <option value="*"<?php if ('*'==$op) { ?> selected <?php } ?>>*</option>
        <option value="/"<?php if ('/'==$op) { ?> selected <?php } ?>>/</option>
    </select>
    <input type="number" name="y" value="<?php echo $y; ?>" step="any">
    <input type="submit" value="=">
    <?php echo $res ?>
</form>

</body>

</html>