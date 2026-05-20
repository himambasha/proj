<!-- REGISTRATION fORM -->
<!DOCTYPE html>
<html>
<head>
<title> DELETE FORM </title>
<style>
header{
  color:white;
  background-color:#e83577;
   text-align:center;
   font-size:18px;
   font-style: "Verdana, Arial, Tahoma, Serif";
	padding:5px;
}
.reg{
	align-items:center;
	text-align:left;
	display:flex;
	flex:1;
	margin:0 auto;
}
form{
 border: 2px solid #e83577;
 padding:25px;
 border-radius:10px;
}
footer{
	color:white;
	background-color:#e83577;
	font-style:Verdana;
	text-align:center;
	font-size:10px;
}
body{
	display:flex;
	flex-direction:column;
   margin:0;
  min-height:100vh;
}
#btn{
  text-align:center;
}
td{
	padding:3px;
}
.hideme{
   display:none;
}
</style>
</head>
<body>
<header>
<h1> DELETE FORM </h1>
</header>
<div class="reg">
<form method="POST" action="delete.php">
<table>
<tr class="hideme">
<td><label for="fname" value="fname">First Name : </label></td>
<td><input type="text" value="fname" name="fname" required /><td><?php echo "<p style='color:red'>*</p>" ?></td>
</tr>
<tr >
<td><label for="lname" value="lvalue">Last Name : </label></td>
<td><input type="text" value="Last Name" name="lname"required/> <td><?php echo "<p style='color:red'>*</p>" ?></td>
</tr>
<tr class="hideme">
<td><label for="sid" value="sid">Student ID: </label></td>
<td><input type="text" value="ID" name="id" required /><td><?php echo "<p style='color:red'>*</p>" ?></td>
</tr>
<tr class="hideme">
<td><label for="branch" value="branch">Branch : </label></td>
<td><input type="text" value="Branch" name="branch" required /><td><?php echo "<p style='color:red'>*</p>" ?></td>
</tr>
<tr id="btn" >
<td> <input type="submit" value="Submit" name="submit"/></td>
<td> <input type="reset" value="Reset" name="reset"/>
 </td>
</tr class="hideme">
</table>
<label> To Update 
<a href="./update_form.php" >Click Here</a> </label>
</form>

</div>
<footer>
<p> &copy; 2026 Himambasha - All  Rights Reserved </p>
</footer>
</body>
</html>
