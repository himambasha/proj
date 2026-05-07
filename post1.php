<!DOCTYPE html>
<html lang="en">
<head>
    <title>POST Result</title>
</head>
<body>
    <h1>Form Submission Result</h1>
    <?php
        echo "Hello, " . htmlspecialchars($_POST['name']) . "! Your email is " . htmlspecialchars($_POST['email']) . ".";
    ?>
</body>
</html>
