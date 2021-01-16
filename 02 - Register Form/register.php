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
$username   = $_POST['username'];
$password   = $_POST['password'];
$email      = $_POST['email'];

if (empty($username) || empty($password) || empty($email)) {
    die("You need to provide username, password and email!");
}

// Register New User
$sql = "INSERT INTO `users` (username, password, email) VALUES('$username', '$password', '$email')";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Register Successful!";
} else {
    echo "Failed to Register! Please try again!";
}
