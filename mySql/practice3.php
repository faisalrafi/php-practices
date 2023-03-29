<?php include "functions.php"; ?>

<?php

$connection = mysqli_connect('localhost', 'root', '', 'mylist');
if(!$connection)
{
    die("Database Connection failed") . mysqli_error($connection);
}

$sql = "SELECT * FROM records ";

$result = mysqli_query($connection, $sql);
if(!$result)
{
    die("Query Failed");
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

<?php

while($record = mysqli_fetch_assoc($result)){
//    print_r($record);
    echo $record['months'];
}

?>

</body>
</html>