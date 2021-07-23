<?php
include('db.php');
include('smtp/PHPMailerAutoload.php');
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['password'])){
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$mobile=mysqli_real_escape_string($con,$_POST['mobile']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	
	if(mysqli_num_rows(mysqli_query($con,"select * from users where email='$email'"))>0){
		$status="error";
		$msg="Already exist";
	}else{
		$new_password=password_hash($password,PASSWORD_DEFAULT);
		mysqli_query($con,"insert into users(name,email,mobile,password) values('$name','$email','$mobile','$new_password')");
		$status="success";
		$msg="Thank you";
		$_SESSION['UID']=mysqli_insert_id($con);
		$_SESSION['OTP']=rand(1111,9999);
		$emailMsg="Your OTP is ".$_SESSION['OTP'];
		smtp_mailer($email,"Verify OTP",$emailMsg);
	}
	echo json_encode(['status'=>$status,'msg'=>$msg]);
}

if(isset($_POST['otp'])){
	$otp=mysqli_real_escape_string($con,$_POST['otp']);
	if($otp==$_SESSION['OTP']){
		mysqli_query($con,"update users set email_verify='1' where id='".$_SESSION['UID']."'");
		$status="success";
		$msg="Thank You";
	}else{
		$status="error";
		$msg="Please enter correct otp";
	}
	echo json_encode(['status'=>$status,'msg'=>$msg]);
}

function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	//$mail->SMTPDebug  = 3;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "email";
	$mail->Password = 'password';
	$mail->SetFrom("email");
	//$mail->addAttachment('upload/Get_Started_With_Smallpdf.pdf');
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		//echo $mail->ErrorInfo;
	}else{
		//echo 'Sent';
	}
}
?>