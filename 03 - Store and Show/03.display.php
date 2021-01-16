<?php

$db_server      = "localhost";
$db_user        = "root";
$db_password    = "";
$db_database    = "main";

$conn = mysqli_connect($db_server, $db_user, $db_password, $db_database);

if (!$conn) {
    die("Cannot Connect to Database!");
}

$sql = "SELECT * FROM `persons`";
$result = mysqli_query($conn, $sql);

?>
<html>

<head>
    <title>All Persons</title>
</head>

<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Birth Date</th>
            <th>Phone</th>
        </tr>

        <?php while ($person = mysqli_fetch_array($result)) { ?>
            <tr>
                <td><?php echo $person['name']; ?></td>
                <td><?php echo $person['email']; ?></td>
                <td><?php echo $person['address']; ?></td>
                <td><?php echo $person['dob']; ?></td>
                <td><?php echo $person['phone']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>