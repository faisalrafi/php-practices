<?php
//print_r($_GET); ?>

<?php
session_start();
$_SESSION['message'] = "Hello all, How are you?";

$name  = "cookie";
$value = 200;
$expired = time() + (60*60*24*7);
setcookie($name, $value, $expired);
?>
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
$id = 100;
$button = "Click Here"; ?>
<a href="practice5.php?id=<?php echo $id; ?>"><?php echo $button; ?></a><br/>
<?php
if (isset($_COOKIE['cookie'])){
    $cook = $_COOKIE['cookie'];
    echo $cook;
    echo "<br/>";
}
else{
    $cook = "";
}

if (isset($_SESSION['message']))
{
    echo $_SESSION['message'];
}
?>

</body>
</html>