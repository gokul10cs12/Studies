<!DOCTYPE html>
<html>

<body>
	<center>
	<h1>login</h1>
<body bgcolor="white">

<form method="post">
	username :<p></p> <input type="text" name="username"><p></p>
	password : <p></p><input type="password" name="password"><p></p>
<input type="submit" name="submit" value="login"></form>
New user? click<a href="signup.php">here</a><p></p>


<?php

$server="localhost";
$username="root";
$password="qIhD0VqPTeaI1YIn";
$db="user";
if(isset($_POST["submit"]))
{

$uname =$_POST["username"];
$pwd= md5($_POST["password"]);
$conn =new mysqli($server,$username,$password,$db);



if($conn->connect_error)
{
	echo "failed to connect";
}

$sql = "select username,password from users where username='$uname' and password='$pwd'";
$exec= mysqli_query($conn,$sql);

if (mysqli_num_rows($exec)!=0)
{

	session_start();
	$_SESSION["user"]=$uname;
	header('location:home.php');
}

else{
	echo "invalid user credentials";
}

$conn->close();
}

?>


</center>
</body>
</html>