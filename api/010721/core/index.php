<?php
$con=mysqli_connect("localhost","root","","260421");
if(isset($_POST['name']) && isset($_POST['city']) && isset($_POST['marks'])){
	$name=$_POST['name'];
	$city=$_POST['city'];
	$marks=$_POST['marks'];
	
	if(mysqli_query($con,"insert into student(name,city,marks) values('$name','$city','$marks')")){
		$status='success';
		$msg="Data inserted";
	}else{
		$status='error';
		$msg="Data not inserted";
	}
	echo json_encode(['status'=>$status,'msg'=>$msg]);
}
?>