<?php

$db_server      = "localhost";
$db_user        = "root";
$db_password    = "";
$db_database    = "main";

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_database);

if (!$conn) {
    die("Cannot Connect to Database!");
}

// Get User Submitted Data
$name     = $_POST['name'];
$country  = $_POST['country'];
$gender    = $_POST['gender'];

// Register New User
$sql = "INSERT INTO `persons` (name, country, gender) VALUES ('$name', '$country', '$gender')";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Saved Successfully!";
} else {
    echo "Failed to Save! Please try again!";
}
