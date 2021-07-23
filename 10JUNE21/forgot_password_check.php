<?php
include('db.php');
include('smtp/PHPMailerAutoload.php');
if(isset($_POST['email'])){
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$res=mysqli_query($con,"select * from users where email='$email'");
	if(mysqli_num_rows($res)>0){
		$row=mysqli_fetch_assoc($res);
		
		$forgot_password_id=str_shuffle('abcdefghijklmn');
		mysqli_query($con,"update users set forgot_password_id='$forgot_password_id' where id='".$row['id']."'");
		$link="http://127.0.0.1/php_class/260421/100621/set_password.php?id=".$forgot_password_id;
		smtp_mailer($email,"Forgot Password",$link);
		$status="success";
		$msg="Please check your email id";
	}else{
		$status="error";
		$msg="Please enter valid email id";
		
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