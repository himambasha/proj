<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Registration Form</title>
    <style>
        .error { color: #FF0000; }
        .form {
            display: flex;
            flex-direction: column;
            color: #0000ff;
            border: 3px solid #0000ff;
            padding: 30px;
            width: 300px;
            margin: 0 auto;
            border-radius: 10px;
        }
        body {
            font-family: "Times New Roman", Times, serif;
            
            justify-content: center;
          
            height: 100vh;
          
        }
    </style>
</head>
<body>
    <h1>Student Registration Form</h1>
    <p><span class="error">* required fields</span></p>

    <?php
$servername = "localhost";
$username   = "root";   // change if needed
$password   = "";       // change if needed
$dbname     = "sample";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $idErr = $nameErr = $branchErr = $yearErr = $semErr = "";
    $id = $name = $branch = $year = $sem = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["id"])) {
            $idErr = "ID is required";
        } else {
            $id = htmlspecialchars($_POST["id"]);
        }

        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = htmlspecialchars($_POST["name"]);
        }

        if (empty($_POST["branch"])) {
            $branchErr = "Branch is required";
        } else {
            $branch = htmlspecialchars($_POST["branch"]);
        }

        if (empty($_POST["year"])) {
            $yearErr = "Year is required";
        } else {
            $year = htmlspecialchars($_POST["year"]);
        }

        if (empty($_POST["sem"])) {
            $semErr = "Semester is required";
        } else {
            $sem = htmlspecialchars($_POST["sem"]);
        }
        if ($idErr == "" && $nameErr == "" && $branchErr == "" && $yearErr == "" && $semErr == "") {
        $sql = "INSERT INTO students (id, name, branch, year, sem) 
                VALUES ('$id', '$name', '$branch', '$year', '$sem')";

        if ($conn->query($sql) === TRUE) {
            echo "<p style='color:green;'>Student record added successfully!</p>";
        } else {
            echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
        }
    }
    }
    $conn->close();
    ?>

    <form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" value="<?php echo $id; ?>">
        <span class="error">* <?php echo $idErr; ?></span>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>">
        <span class="error">* <?php echo $nameErr; ?></span>

        <label for="branch">Branch:</label>
        <input type="text" id="branch" name="branch" value="<?php echo $branch; ?>">
        <span class="error">* <?php echo $branchErr; ?></span>

        <label for="year">Year:</label>
<select id="year" name="year" required>
    <option value="">Select Year</option>
    <option value="I">I</option>
    <option value="II">II</option>
    <option value="III">III</option>
</select>
<span class="error">* <?php echo $yearErr; ?></span>

<label for="sem">Semester:</label>
<select id="sem" name="sem" required>
    <option value="">Select Semester</option>
    <option value="I">I</option>
    <option value="II">II</option>
</select>
<span class="error">* <?php echo $semErr; ?></span>


        <br><br>
        <input type="submit" name="submit" value="Submit">
        <input type="reset" name="reset" value="Reset">
    </form>
</body>
</html>
