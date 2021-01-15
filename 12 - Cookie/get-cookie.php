<?php $theme = $_COOKIE['theme']; ?>
<html>

<head>
    <title>Get Cookie</title>
</head>

<body>

    <?php
    if (empty($theme)) {
        echo "Cookie not set!";
    } else {
        echo "Theme: " . $theme;
    }
    ?>

</body>

</html>