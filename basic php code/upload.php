<?php
$name=$_POST['username'];
$last=$_POST['lastname'];
$x=$_FILES['myfile'];
echo "File Name: ".$x['name'];
echo '<br>';
echo "File Type: ".$x['type'];
echo '<br>';
echo "File Size: ".$x['size'];
echo '<br>';
echo $name;
echo '<br>';
echo $last;
if(file_exists("photos/".$x['name']))
{
	echo " files are  all ready exist";
}
else if($x['type']=="image/jpeg")
{
move_uploaded_file($x['tmp_name'],"photos/".$x['name']);
}
else
{
	echo "file format are not supported";
}
?>
 