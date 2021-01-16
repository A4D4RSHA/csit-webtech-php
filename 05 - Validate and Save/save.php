<?php

$db_server      = "localhost";
$db_user        = "root";
$db_password    = "";
$db_database    = "main";

$conn = mysqli_connect($db_server, $db_user, $db_password, $db_database);

if (!$conn) {
    die("Cannot Connect to Database!");
}

// Get User Submitted Data
$f_name     = $_POST['first_name'];
$l_name     = $_POST['last_name'];
$address    = $_POST['address'];

// Register New User
$sql = "INSERT INTO `persons` (first_name, last_name, address) VALUES ('$f_name', '$l_name', '$address')";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Saved Successfully!";
} else {
    echo "Failed to Save! Please try again!";
}
