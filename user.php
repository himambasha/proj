<!--user.php -->
<!DOCTYPE html>
<html>
<head>
<title> User Name </title>
<style>
header{
 text-align:center;
 color: white;
 background-color:navy;
 padding:15px;
 font-size:24px;
}
.user{
	display:flex;
	flex:1;
    margin: 0 auto;
	align-items:center;
 }
footer{
color:white;
background-color:navy;
text-align:center;
font-size:15px;
}
body{
display:flex;
flex-direction:column;
min-height:100vh;
margin:0;
}
.user form{
  border: 1px solid blue;
  padding: 25px;
  width:300px;
  height:200px;
  text-align: center;
   border-radius:10px;
}

</style>
</head>
<body>
<header>
<h1> USER NAME TO PHP + DB</h1>
</header>
<div class="user">
<form method="post" action="conn.php" >
 <p> Sign in Form </p>
<label for="user" name="name">User Name : </label>
<input type="text" name="user" value="User name"/><br><br>
<label for="pswd" name="pswd">Password : </label>
<input type="Password" name="password" 
value="password"/>
<br><br> 
<input type="submit" name="submit" value="Submit"/>
<input type="reset" name="reset" value="Reset"/> 
</form>
</div>
<footer>
<p> @ 2026 himambasha - All Rights Reserved </p> 
</footer>

</body>
</html>