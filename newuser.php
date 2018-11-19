<?php

$new_user = $_POST['newuser'];
$res = fopen(__DIR__ . '/book.txt', 'a');
$add_user = $new_user . "\n";
$write  = fwrite($res, $add_user);

?>

<a href="/">Home</a>
