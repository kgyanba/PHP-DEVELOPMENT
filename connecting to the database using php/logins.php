
<?php
if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];
echo $username;
$connection = mysqli_connect('localhost','root', '','loginapp');
if(!$connection)
{
echo "connection failed";
}
else
{
echo "connection done";
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>login</title>
</head>
<body>
<h1>Login form</h1>
<form action="" method="post">
<label>username</label></br>
<input type="text" placeholder="username" name="username"></br>
<label>password</label></br>
<input type="password" placeholder="password" name="password"></br>
<input type="submit" value="submit">
</form>
</body>
</html>