<?php
// create a connection with database 
$connection=mysqli_connect('localhost','root');
// this if condition checked whether connection is established or not
if(!$connection)
{
	echo "connection failed";
}
else
{
	echo "connection succesfull";
}
echo '<br>';
// mysqli_select_db is used for select a database on which you want to perform any operation
mysqli_select_db($connection,'loginapp');
$query="select * from users";
// mysql_query function is used to excute a query
$result=mysqli_query($connection,$query);
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<body>
<?php
while($row = mysqli_fetch_assoc($result))
{
	print_r($row);
	echo '<br>';
}	
?>

</body>
</head>
</html>