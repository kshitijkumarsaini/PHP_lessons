<?php
include('db.php');

if(isset($_GET['id']) && $_GET['id']!=''){
	$id=mysqli_real_escape_string($con,$_GET['id']);
	$res=mysqli_query($con,"select * from users where forgot_password_id='$id'");
	if(mysqli_num_rows($res)>0){
		$row=mysqli_fetch_assoc($res);
		
	}else{
		header('location:index.php');
		die();
	}
}else{
	header('location:index.php');
	die();
}

if(isset($_POST['submit'])){
	$id=mysqli_real_escape_string($con,$_GET['id']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	$new_password=password_hash($password,PASSWORD_DEFAULT);
	mysqli_query($con,"update users set password='$new_password',forgot_password_id='' where forgot_password_id='".$id."'");
	echo "Password updated";
}

?>

<form id="frmPasswordUpdate" method="post">
	<table>
		
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" required/></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit">
			</td>
		</tr>
	</table>
</form>

<div id="result"></div>