<!DOCTYPE html>
<html>
<head>
    <title>$GLOBALS Demonstration</title>
</head>
<body>
    <?php
    $global_var = "Hello";

    function display() {
        echo "<p>Global variable 1: " . $GLOBALS['global_var'] . "</p>";
    }

    display();
    ?>
</body>
</html>
