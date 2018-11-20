<html>
<head>
    <title>PHP</title>

    <link href="style.css" rel="stylesheet">
</head>
<body>

<?php

class Table
{
    public $color;
    public $legs;

    public function __construct($color)
    {
        $this->color = $color;
    }

    public function show()
    {
        echo 'Table ';
        echo '<br>';
        echo $this->color;
    }
}

$table1 = new Table('red');
$table1->show();



?>

</body>
</html>
