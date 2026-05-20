<!--reg-conn.php-->
<?php
$server="localhost";
$user="root";
$password="";
$dbname="sample";
$conn= new mysqli($server,$user,$password,$dbname);
if($conn->connect_error){
	echo ("connection failed".$conn->connect_error);
}else{
	echo("Sucessfully Connected");
}
if ($_SERVER["REQUEST_METHOD"] == "POST" ){
 $lname=trim($_POST["lname"]);
 
 if(!empty($lname)){
	 $sql = "DELETE FROM registration WHERE lname='$lname'";
	 if($conn->query($sql)===TRUE){
		 echo "<p style='color:green;text-align:center;text-size:20px;'> Column Deleted Successfully </p>";
	 }else{
		 echo "<p 		 style='color:red;text-align:center;text-size:20px;'> Column Not Deleted Successfully </p>";
	 }
 }
}else{
	echo "<p 		 style='color:blue;text-align:center;text-size:20px;'> Please Check your Data </p>";
}
?>
