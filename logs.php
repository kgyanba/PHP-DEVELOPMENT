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