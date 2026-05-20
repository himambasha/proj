<?php
$servername= "localhost";
$username = "root";
$password = "";
$dbname = "sample";

$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	
	die("connection failed:". $conn->connect_error);
}
else{
	echo "connection is sucessfull";
}

if($_SERVER["REQUEST_METHOD"]="POST"){
	$user=trim($_POST["user"]);
	$pass=trim($_POST["password"]);
if(!empty($user)&& !empty($pass)){
	//$hashed=password_hash($pass,PASSWORD_DEFAULT);
	$sql= "insert into bca(user,password)
	       values('$user','$pass')";
	if($conn->query($sql)===TRUE){
	 echo "<p style='color:green;text-align:center;text-size:20px;'> User Registered Successfully </p>";
	}else {
		echo "<p style='color:red;text-align:center;text-size:20px;'> User Not Registered Successfully </p>";
	}
}else{
	echo "<p style='color:blue;text-align:center;text-size:20px;'> Please Enter Username and Password  </p>";
}
}
	
?>