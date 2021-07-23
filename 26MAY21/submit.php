<?php
$con=mysqli_connect('localhost','root','','260421');
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$arr=[];
$res=mysqli_query($con,"select * from users where email='$email'");
if(mysqli_num_rows($res)>0){
	$arr['email_msg']="Email already present";
}

$res=mysqli_query($con,"select * from users where mobile='$mobile'");
if(mysqli_num_rows($res)>0){
	$arr['mobile_msg']="Mobile already present";
}

if(count($arr)==0){
	echo json_encode(['status'=>'success','msg'=>'Data inserted']);
}else{
	echo json_encode($arr);
}
?>