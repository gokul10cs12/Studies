<!DOCTYPE html>
<html>
<body>
<h1>Home</h1>
Welcome
<?php
session_start();
if(isset($_SESSION["user"]))
{
	$var=$_SESSION["user"];
	echo "$var";
	}

else{
	header('location:login.php');

}
?>
<a href="logout.php">Logout?</a>

</body>
</html>