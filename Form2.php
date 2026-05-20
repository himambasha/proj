<!DOCTYPE html>
<html>
    <head>
        <title> Form Validation -2</title>
</head>
<style>
    .error{ color: #FF0000;
} .form {
    display: center;
    flex-direction: column;
    color:#0000ff;
    border: 3px solid #0000ff;
    padding: 50px;;
    width:300px;
    margin: 0 auto;
    border-radius: 10px;}
body{
    font-family:"Times New Roman", Times, serif;
    display: center;
    text-align: center;
}
    </style>
<body>
    <h1> Form Validation </h1>
    <p> <span class="error" >* required fields</span> </p>
    <form class="form" method="post"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name"> Name: </label>
        <input type="text" id="name" name="name">
        <span class="error">* </span>
        <br><br>
        <label for="email"> Email: </label> 
        <input type="text" id="email" name="email">
        <span class="error">* </span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
        <input type="reset" name="reset" value="Reset">
</form>
<?php
$nameErr = $emailErr = "";
$name = $email = "";
if ($_SERVER["REQUEST_METHOD"]== "POST") {
    IF(empty($_POST["name"])) {
        $nameErr= "Name is Required";
    } else{
        $name=htmlspecialchars($_POST["name"]);
    }
}
?>
</body>
</html>