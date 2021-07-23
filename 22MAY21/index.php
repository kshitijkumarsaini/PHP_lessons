<?php
require('include/database.php');
require('include/function.php');
isNotValidAccess();
if(isset($_POST['submit'])){
	$email=getSafeValue($_POST['email']);
	$password=getSafeValue($_POST['password']);
	
	$res=mysqli_query($con,"select * from admin where email='$email' and password='$password'");
	
	if(mysqli_num_rows($res)>0){
		$row=mysqli_fetch_assoc($res);
		$_SESSION['UNAME']=$row['name'];
		$_SESSION['UID']=$row['id'];
		redirect('dashboard.php');
	}else{
		echo "Please enter valid login details";
	}
	
}
?>
<form method="post">
	<table>
		<tr>
			<td>Email</td>
			<td><input type="email" name="email" required/></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" required/></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit"></td>
		</tr>
	</table>
</form>