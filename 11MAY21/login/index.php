<?php
session_start();
if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	if($email=='vishal' && $password=="vishal@1"){
		$_SESSION['IS_LOGIN']=true;
		header('location:dashboard.php');
		die();
	}else{
		echo "Please enter valid login details";
	}
}
?>
<form method="post">
	Email:- <input type="text" name="email"/><br/><br/>
	Pwd:- <input type="password" name="password"/><br/><br/>
	<input type="submit" name="submit"/>
</form>