<?php

if (isset($_POST['x'])) {
    $x = (int)$_POST['x'];
} else {
    $x = null;
}
if (isset($_POST['y'])) {
    $y = (int)$_POST['y'];
} else {
    $y = null;
}
if (isset($_POST['op'])) {
    $op = $_POST['op'];
} else {
    $op = null;
}

$res = calculate($x, $y, $op);
