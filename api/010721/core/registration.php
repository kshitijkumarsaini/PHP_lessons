<?php
$code="";
$con=mysqli_connect("localhost","root","","260421");
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	if(mysqli_num_rows(mysqli_query($con,"select * from users where email='$email'"))>0){
		$status='error';
		$msg="Email id already present";
		$code=1;	
	}else{
		if(mysqli_query($con,"insert into users(name,email,pass3word) values('$name','$email','$password')")){
			$status='success';
			$msg="Data inserted";
		}else{
			$status='error';
			$msg="Data not inserted";
			$code=2;
		}
	}
	echo json_encode(['status'=>$status,'msg'=>$msg,'code'=>$code]);
}
?>