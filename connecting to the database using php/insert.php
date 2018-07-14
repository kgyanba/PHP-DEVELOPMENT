<?php
if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$connection = mysqli_connect('localhost','root');
if(!$connection)
{
echo "connection failed";
}
else
{
echo "connection done";
}
// it is used for select a database on which you want to perform a query
mysqli_select_db($connection,'loginapp');
$query="insert into users(username,password) values('$username','$password')";
mysqli_query($connection,$query);
//mysqli_close is used for close the established connection
mysqli_close($connection);
}
?>