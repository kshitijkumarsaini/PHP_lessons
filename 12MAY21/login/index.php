<?php
session_start();
if(isset($_SESSION['IS_LOGIN'])){
	header('location:dashboard.php');
	die();
}
if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	if($email=='vishal' && $password=="vishal@1"){
		if(isset($_POST['remember'])){
			setcookie('UEMAIL',$email,time()+(60*60*24));
			setcookie('UPASSWORD',$password,time()+(60*60*24));
		}else{
			setcookie('UEMAIL',$email,1);
			setcookie('UPASSWORD',$password,1);
		}
		$_SESSION['IS_LOGIN']=true;
		header('location:dashboard.php');
		die();
	}else{
		echo "Please enter valid login details";
	}
}
$uemail='';
$upassword='';
$is_checked='';
if(isset($_COOKIE['UEMAIL']) && isset($_COOKIE['UPASSWORD'])){
	$uemail=$_COOKIE['UEMAIL'];
	$upassword=$_COOKIE['UPASSWORD'];
	$is_checked='checked="checked"';
}
?>
<form method="post">
	Email:- <input type="text" name="email" value="<?php echo $uemail?>"/><br/><br/>
	Pwd:- <input type="password" name="password" value="<?php echo $upassword?>"/><br/><br/>
	Remember Me<input type="checkbox" name="remember" <?php echo $is_checked?>/>
	<input type="submit" name="submit"/>
</form>