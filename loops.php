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

//while loop
$count = 0;
while($count < 10){
    echo "How are YOu?" . "<br>";
    $count++;
}

//for loop
$c = 0;
for ($c;$c <10 ; $c++)
{
    echo "How are You Rafi?" . "<br>";
}

//foreach loop
$nums = array(1,2,3,4,5,6);

foreach($nums as $num)
{
    echo $num . "<br>";
}

?>

</body>
</html>