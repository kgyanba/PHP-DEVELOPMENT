<?php
if(isset($_POST['submit'])){
echo "user name is ".$_POST['username'];
echo '<br>';
echo "email is ".$_POST['email'];
}
else
	echo "you are not able to login";

?>