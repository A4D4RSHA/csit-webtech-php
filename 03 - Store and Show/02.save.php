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
$name       = $_POST['name'];
$email      = $_POST['email'];
$address    = $_POST['address'];
$dob        = $_POST['dob'];
$phone      = $_POST['phone'];

// Register New User
$sql = "INSERT INTO `persons` (name, email, address, dob, phone) VALUES ('$name', '$email', '$address', '$dob', '$phone')";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Saved Successfully!";
} else {
    echo "Failed to Save! Please try again!";
}
