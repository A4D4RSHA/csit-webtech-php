<?php

$db_server      = "localhost";
$db_user        = "root";
$db_password    = "";
$db_database    = "main";

$conn = mysqli_connect($db_server, $db_user, $db_password, $db_database);

if (!$conn) {
    die("Cannot Connect to Database!");
}

// Delete Query

$sql = "DELETE FROM persons where id = 1";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Deleted Successfully!";
} else {
    echo "Failed to Delete! Please try again!";
}
