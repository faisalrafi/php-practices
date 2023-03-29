<?php

include "db.php";

function createRows(){
    if (isset($_POST['submit']))
    {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];

        //sql_injection
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

        //password encrypt
        $hashFormat = "$2y$10$";
        $salt = "iusesomecrazystrings22";
        $hash_and_salt = $hashFormat . $salt;
        $password = crypt($password, $hash_and_salt);

        $sql = "INSERT INTO users(username, password)";
        $sql .= "VALUES ('$username', '$password')";

        $result = mysqli_query($connection, $sql);
        if (!$result)
        {
            die('Query Failed' . mysqli_error());
        }
        else{
            echo "Record Created";
        }
    }
}


function showAllData()
{
    global $connection;
    $sql = "SELECT * FROM users ";
    $result = mysqli_query($connection, $sql);

    if (!$result)
    {
        die('Query Failed' . mysqli_error());
    }

    while ($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }

}

function updateTable()
{
        global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $sql = "UPDATE users SET ";
    $sql .= "username = '$username', ";
    $sql .= "password = '$password' ";
    $sql .= "WHERE id = $id ";

    $result = mysqli_query($connection,$sql);
    if(!$result)
    {
        die("QUERY FAILED" . mysqli_error($connection));
    }
    else{
        echo "Record Updated";
    }

}

function deleteRows()
{
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $sql = "DELETE FROM users ";
    $sql .= "WHERE id = $id ";

    $result = mysqli_query($connection,$sql);
    if(!$result)
    {
        die("QUERY FAILED" . mysqli_error($connection));
    }
    else{
        echo "Record Deleted";
    }
}


?>
