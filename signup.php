
<html>

<body>
	<center>
	<h1>signup</h1>
<body bgcolor="grey">

<form method="post">
	name     :<p></p> <input type="text" name="name"><p></p>
	username :<p></p> <input type="text" name="username"><p></p>
	password : <p></p><input type="password" name="password"><p></p>
<input type="submit" name="submit" value="login"></form>
<a href="login.php">back to login</a>

</center></body></html>
<?php

$server="localhost";
$username="root";
$password="qIhD0VqPTeaI1YIn";
$db="user";
if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$uname =$_POST["username"];
$pwd= md5($_POST["password"]);
$conn =new mysqli($server,$username,$password,$db);


if($conn->connect_error)
{
	echo "failed to connect";
}

$sql ="INSERT into users(name,username,password) VALUES ('$name','$uname','$pwd')";


if(mysqli_query($conn,$sql)==TRUE){
	echo "data inserted";
}
else{
	echo "failed to insert data";
}
$conn->close();
}



?>