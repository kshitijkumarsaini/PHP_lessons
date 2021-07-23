<?php
sleep(3);
$con=mysqli_connect('localhost','root','','260421');
if(isset($_POST['name'])){
	$name=$_POST['name'];
	mysqli_query($con,"insert into student(name) values('$name')");
	echo "Thank you for submit";
}
?>