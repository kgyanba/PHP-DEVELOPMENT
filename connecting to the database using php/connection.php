<?php
$connection = mysqli_connect('localhost','root','','loginapp');
if(!$connection)
{
	echo "connection is failed";
}
else
{
	echo "<font color='blue'>connection is done";
}
?>