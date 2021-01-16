<?php

$db_server      = "localhost";
$db_user        = "root";
$db_password    = "";
$db_database    = "main";

$conn = mysqli_connect($db_server, $db_user, $db_password, $db_database);

if (!$conn) {
    die("Cannot Connect to Database!");
}


// Insert Query


$sql = "INSERT INTO persons (name, age, gender) VALUES ('Ram', '20', 'Male')";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Insert Successfully!";
} else {
    echo "Failed to Insert! Please try again!";
}
