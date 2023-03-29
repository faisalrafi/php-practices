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

$num = 10;

switch ($num)
{
    case 1:
        echo "this is false";
        break;
    case 7:
        echo "this is true";
        break;

    case 6:
        echo "this is true";
        break;


    default:
        echo "we could not find anything";
}



?>

</body>
</html>