<?php


$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

if ($connection)
{
    echo "We are connected to the database";
}
else{
    die("Sorry Database connection failed");
}

$sql = "SELECT * FROM users ";

$result = mysqli_query($connection, $sql);

if (!$result)
{
    die('Query Failed' . mysqli_error());
}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous"/>
</head>
<body>


<div class="container">
    <div class="col-md-8">
        <?php


        while ($row = mysqli_fetch_assoc($result))
        {
            print_r($row);
        }


        ?>
    </div>
</div>



</body>
</html>
