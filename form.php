<!DOCTYPE html>
<html>
<head>
<title>Form Validation Example</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  Name: <input type="text" name="username">
  Password: <input type="password" name="password">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["username"]); // corrected field name
    if (empty($name)) {
        echo "Name is required.";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        echo "Only letters and whitespace allowed.";
    } else {
        echo "Valid Name: " . htmlspecialchars($name);
    }
}
?>
</body>
</html>
