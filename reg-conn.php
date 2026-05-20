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
if($_SERVER["REQUEST_METHOD"]="POST"){
 $fname=trim($_POST["fname"]);
 $lname=trim($_POST["lname"]);
 $id=trim($_POST["id"]);
 $branch=trim($_POST["branch"]);
 if(!empty($fname)&&!empty($lname)&&!empty($id)&&!empty($branch)){
	 $sql="insert into registration(fname,lname,id,branch) values('$fname','$lname','$id','$branch')";
	 if($conn->query($sql)===TRUE){
		 echo "<p style='color:green;text-align:center;text-size:20px;'> Student Inserted Successfully </p>";
	 }else{
		 echo "<p 		 style='color:red;text-align:center;text-size:20px;'> Student Details Not Inserted Successfully </p>";
	 }
 }
}else{
	echo "<p 		 style='color:blue;text-align:center;text-size:20px;'> Please Check your Data </p>";
}



?>
