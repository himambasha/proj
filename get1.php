<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET Result</title>
</head>
<body>
    <h1>Form Submission Result</h1>
    <?php
        echo "Hello, " . htmlspecialchars($_GET['name']) . "! Your email is " . htmlspecialchars($_GET['email']) . ".";
    ?>
</body>
</html>
