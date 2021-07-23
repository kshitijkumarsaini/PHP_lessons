<?php
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$amt=$_POST['amt'];
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
	curl_setopt($ch, CURLOPT_HEADER, FALSE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER,
				array("X-Api-Key:test_31f8b438e71c194dfe7ed4be918",
					  "X-Auth-Token:test_c99123c5992a5fd31cf7192f98b"));
	$payload = Array(
		'purpose' => 'FIFA 16',
		'amount' => $amt,
		'phone' => '9999999999',
		'buyer_name' => $name,
		'redirect_url' => 'http://127.0.0.1/php_class/260421/100721/payment_gateway/redirect.php',
		'send_email' => true,
		'send_sms' => true,
		'email' => 'foo@example.com',
		'allow_repeated_payments' => false
	);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
	$response = curl_exec($ch);
	$response=json_decode($response,true);
	curl_close($ch); 

	if(isset($response['success']) && $response['success']==1){
		
		$payment_request_id=$response['payment_request']['id'];
		$con=mysqli_connect('localhost','root','','260421');
		mysqli_query($con,"insert into form(name,amt,payment_request_id,payment_status) values('$name','$amt','$payment_request_id','pending')");
		
		$longurl=$response['payment_request']['longurl'];
		header('location:'.$longurl);
		die();
	}
}
?>

<form method="post">
	Name <input type="text" name="name"/><br/><br/>
	Amt <input type="text" name="amt"/><br/><br/>
	<input type="submit" name="submit"/>
	
</form>