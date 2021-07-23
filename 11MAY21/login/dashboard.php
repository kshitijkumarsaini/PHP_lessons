<?php
session_start();
if(!isset($_SESSION['IS_LOGIN'])){
	header('location:index.php');
	die();
}
echo "Welcome Admin";
?>
<br/>
<a href="logout.php">Logout</a>