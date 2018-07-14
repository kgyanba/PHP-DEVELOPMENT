<?php
include("connection.php");
error_reporting(0);
$query="select * from employee";
$result=mysqli_query($connection,$query);
mysqli_close($connection);
?>
<!-- it create a table-->
<table>
<tr>
<th>Name</th>
<th>Address</th>
<th>Salary</th>
<th colspan="2">Operation</th>
</tr>


<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
td{
	padding:10px;
}

</style>
</head>
<body>
<?php
while($row =mysqli_fetch_assoc($result))
{
	echo " <tr>
			<td>".$row['name']."</td>
			<td>".$row['address']."</td>
			<td>".$row['salary']."</td>
			<td><a href='update.php?nm=$row[name]&add=$row[address]&sa=$row[salary]'>edit</td>
			<td>delete</td>
		</tr> ";
}
 
?>
</table>
</body>
</html>