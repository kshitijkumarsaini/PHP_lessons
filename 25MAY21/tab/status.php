<?php
if(isset($_POST['id']) && isset($_POST['type'])){
	$con=mysqli_connect('localhost','root','','260421');
	$res=mysqli_query($con,"select * from pages");
	$id=$_POST['id'];
	$type=$_POST['type'];
	mysqli_query($con,"update pages set status='$type' where id='$id'");
}
?>
