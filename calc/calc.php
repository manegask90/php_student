<?php

$operations = ['+', '-', '*', '/'];

if (isset($_POST['x'])) {
    $x = $_POST['x'];
} else {
    $x = null;
}
if (isset($_POST['y'])) {
    $y = $_POST['y'];
} else {
    $y = null;
}
if (isset($_POST['op'])) {
    $op = $_POST['op'];
} else {
    $op = null;
}
if ($y == 0 && $op == '/') {
    $res = 'Ошибка';
} else {
    $res = calculate($x, $y, $op);
}
