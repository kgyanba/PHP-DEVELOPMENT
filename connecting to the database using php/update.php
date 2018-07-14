<?php
include("connection.php");
error_reporting(0);
$name = $_GET['nm'];
$address = $_GET['add'];
$salary = $_GET['sa'];

?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<form action="" method="get">
<label>Name<label></br>
<input type="text" placeholder="name" name="nm" value="<?php echo $_GET['nm'];?>"></br>
<label>Address</label></br>
<input type="text" placeholder="Address" name="Add" value="<?php echo $_GET['add'];?>"></br>
<label>salary</label></br>
<input type="number" placeholder="salary" name="sa" value="<?php echo $_GET['sa'];?>"></br>
<input type="submit" value="update" name="submit">
</form>
</br>
<?php
if(isset($_GET['submit']))
{
	$query="update employee set salary='$salary' where name='$name'";
	$result = mysqli_query($connection,$query);
	if($result)
	{
		echo "update succesfully";
	}
	else
	{
		echo "not update";
	}
		
}
else
{
	echo "<font color='red'>click on update button to save the changes";
}
?>
</body>
</html>