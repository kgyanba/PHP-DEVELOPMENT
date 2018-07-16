<?php 
session_start();
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<form action="" method="post">
username :<input type="text" name="username" placeholder="username"></br>
password :<input type="password" name="password" placeholder="password"></br>
<input type="submit" name="submit" value="login">
</form>
</body>
</html>

<?php  
if(isset($_POST['submit']))
{
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$query = "select * from student where username ='$user' && password ='$pass'";
	$result = mysqli_query($connection,$query);
	$total = mysqli_num_rows($result);
	if($total==1)
	{
		$_SESSION['user'] =$user; // it store the value of  current user in seesion variable
		header('location:homes.php');
	}
	else
	{
		echo "login failed";
	}
}
?>