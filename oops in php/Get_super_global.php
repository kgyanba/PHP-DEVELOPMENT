<?php 
$x=10;
function sum()
{
	$y=10;
	$add=$y+$GLOBALS['x'];
	echo $add;
	
}
sum();
 
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<a href="get_super_global.php?name=gyanba">click here</a>

</body>
</html>