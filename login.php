
<?php
if(isset($_POST['submit']))
{
$user = $_POST['username'];
$pass = $_POST['password'];
$pass_len = strlen($pass);
$emai = $_POST['email'];
$phone = $_POST['phonen'];
}
if(empty($user))
{
echo "please enter user name";
}
else if(empty($pass))
{
	echo "please  enter password";
}
else if($pass_len<=6)
{
	echo "please enter password more than six character";
}
else if(empty($emai))
{
	echo "please enter your email address";
}
else if(!filter_var($emai,FILTER_VALIDATE_EMAIL))
{
	echo "please enter a valid email";
}
else if(empty($phone))
{
	echo "please enter a phone";
}
else
{
	echo " succesfully register";
}



?>
<!DOCTYPE html>
<html>
<head>
<title>login form</title>
<body>
<form action="" method="post">
<label>User Name</label></br>
<input type="text" name="username"/></br>
<label>Password</label></br>
<input type="text" name="password"/></br>
<label>Email</label></br>
<input type="text" name="email"/></br>
<label>Phone No</label></br>
<input type="text" name="phonen"/></br>
<input type="submit" name="submit" value="login"/>

</form>
</body>
</head>
</html>