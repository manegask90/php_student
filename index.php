<html>
<head>
    <title>PHP</title>

    <link href="style.css" rel="stylesheet">
</head>
<body>

<form action="/newuser.php" method="post">
    <input type="text" name="newuser">
    <input type="submit">
</form>
<?php

$res   = fopen(__DIR__ . '/book.txt', 'r');
$users = ["User 1\n", "User 2\n", "User 3\n"];

foreach ($users as $user) {
    $write  = fwrite($res, $user);
}

while (!feof($res)) {
    $str = fgets($res);
    echo $str;
    echo '<br>';
}
//$write  = file_put_contents($res, $users);
//$str = implode("\n", $res);
//
//$data = file_put_contents(__DIR__ . '/book.txt', $res);
//echo $data;

?>
</body>
</html>
