<?php 
include("connection.php");
error_reporting(0);
if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$passwordenc = md5($password);
	$email = $_POST['email'];
	$query = "insert into users(username,password,email) values('$username','$passwordenc','$email')";
	$result = mysqli_query($connection,$query);
	if($result)
	{
		echo "query executed";
	}
	else
	{
		echo "query is not executed";
	}
	
}
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<form action="" method="post">
Enter your username:</br><input type="text" name="username" placeholder="username"></br>
Enter your password:</br><input type="password" name="password" placeholder="password"></br>
Enter your email:</br> <input type="email" name="email" placeholder="email"></br>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>