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
$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username) || empty($password)) {
    die("You need to provide both username and password!");
}

// Check for Login
$sql = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Login Successful!";
} else {
    echo "Cannot Login! Please try again!";
}
