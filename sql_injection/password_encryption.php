<?php 
$password = "gyanba";
$passwordenc = md5($password);
if(isset($_POST['submit']))
{
	$password = $_POST['password'];
	if(md5($password)==$passwordenc)
	{
		echo "correct";
	}
	else
	{
		echo "incorrect";
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
enter a password: <input type="password" name="password" placeholder="password"></br>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>