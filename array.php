<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

//both are same
$numberList = array(24, 25 ,'Rafi');
//$numberList = [];

print_r($numberList);
echo '<br>';
//echo $numberList[1];

//Associative array
$names = array('id' => 1, 'name' => 'samsung', 'price'=> 200000);
echo $names['price'];

?>
</body>
</html>