<?php
include('db.php');
if(isset($_GET['email']) && $_GET['email']!=''){
	$email=mysqli_real_escape_string($con,$_GET['email']);
	$res=mysqli_query($con,"select * from users where email='$email'");
	if(mysqli_num_rows($res)>0){
		$row=mysqli_fetch_assoc($res);
		if($row['email_verify']==1){
			echo "Already verified";
		}else{
			mysqli_query($con,"update users set email_verify=1 where email='$email'");
			//echo "Your email id verified";
			$_SESSION['USER_NAME']=$row['name'];
			$_SESSION['USER_ID']=$row['id'];
			header('location:dashboard.php');
			die();
		}
	}else{
		header('location:index.php');
		die();
	}
}else{
	header('location:index.php');
	die();
}
?>