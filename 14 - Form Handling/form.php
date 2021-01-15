<!-- Example Form -->

<form action="save.php" method="post">

    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
    </div>

    <input type="submit" value="Save">

</form>


<!-- Getting Data -->
<?php

// Two Request Types: GET and POST

// a. GET

$name = $_GET['name'];

// b. POST

$name = $_POST['name'];
