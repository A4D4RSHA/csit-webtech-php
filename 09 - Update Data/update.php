<?php

$db_server      = "localhost";
$db_user        = "root";
$db_password    = "";
$db_database    = "main";

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_database);

if (!$conn) {
    die("Cannot Connect to Database!");
}


// Update Query


$sql = "UPDATE `persons` SET `gender` = 'Male' where id = 1";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Updated Successfully!";
} else {
    echo "Failed to Update! Please try again!";
}
