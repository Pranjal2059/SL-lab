<!DOCTYPE html>
<html>
<head>
    <title>Server Information</title>
</head>
<body>
    <h1>Server Information</h1>
    <?php
    
    echo "<p><strong>Server Name:</strong> " . $_SERVER['SERVER_NAME'] . "</p>";

    echo "<p><strong>Server IP Address:</strong> " . $_SERVER['SERVER_ADDR'] . "</p>";

    echo "<p><strong>Server Software:</strong> " . $_SERVER['SERVER_SOFTWARE'] . "</p>";
    ?>
</body>
</html>
