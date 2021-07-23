<?php
$con=mysqli_connect('localhost','root','','260421');
if(isset($_GET['payment_id']) && isset($_GET['payment_status']) && isset($_GET['payment_request_id']) && $_GET['payment_id']!='' && $_GET['payment_status']!='' && $_GET['payment_request_id']!=''){
	$payment_id=$_GET['payment_id'];
	$payment_status=$_GET['payment_status'];
	$payment_request_id=$_GET['payment_request_id'];
	
	mysqli_query($con,"update form set payment_status='success',payment_id='$payment_id' where payment_request_id='$payment_request_id'");
	
	echo "Thank You";
}
?>