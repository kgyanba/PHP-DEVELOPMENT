<?php 
session_start();
session_unset();// this function is used for destroy all the sessions
header('location:logind.php');
?>