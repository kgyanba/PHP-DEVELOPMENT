<?php 
error_reporting(0);
include("connection.php");
if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	//normally if you want to store username like gyanba's in your database then it would not be possible but by using the mysqli_real_escape_string()function, it is possible
	//mysqli_real_escape_string() function escape a special character in a string for use in sql statement
	$user=mysqli_real_escape_string($connection,$username);
	$pass=mysqli_real_escape_string($connection,$password);
	$query = "insert into users (username,password)values('$username','$password')";
	$result = mysqli_query($connection,$query);
	echo '<br>';
}
?>
<!DOCTYPE html>
<html>
<head>
<title>injection</title>
</head>
<body>
<form action="" method="post">
<label> Enter your username<br><label>
<input type="text" name="username"></br>
<label>Eneter your Password</label></br>
<input type="password" name="password"></br>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>