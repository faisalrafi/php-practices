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


//Step 1
if(1 > 2)
{
    echo "hello world";
}
elseif (1 > 3)
{
    echo "Hello brainstation";
}
else{
    echo "I love PHP";
    echo "<br>";
}

//Step 2
for ($c = 0;$c <10 ; $c++)
{
    echo $c . "<br>";
}

//Step 3
$num = 25;
switch($num)
{
    case 1:
        echo "hi";
        break;

    case 7:
        echo "hi";
        break;

    case 18:
        echo "hi";
        break;

    case 22:
        echo "hi";
        break;

    case 9:
        echo "hi";
        break;

    default:
        echo "Hello World";
}

?>


</body>
</html>