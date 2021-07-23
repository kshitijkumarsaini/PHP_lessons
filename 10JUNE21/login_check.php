<?php
include('db.php');
include('smtp/PHPMailerAutoload.php');
if(isset($_POST['email']) &&  isset($_POST['password'])){
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	$res=mysqli_query($con,"select * from users where email='$email'");
	if(mysqli_num_rows($res)>0){
		$row=mysqli_fetch_assoc($res);
		$db_password=$row['password'];
		if(password_verify($password,$db_password)>0){
			if($row['email_verify']==0){
				$status="otp_verify";
				$msg="Your email id is not verified. <a href='javascript:void(0)' onclick='sendOTPVerify()'>Click here</a> to verify your email id";
			}else{
				$_SESSION['USER_NAME']=$row['name'];
				$_SESSION['USER_ID']=$row['id'];
				$status="success";
				$msg="";
			}
		}else{
			$status="error";
			$msg="Please enter correct password";
		}
		
	}else{
		$status="error";
		$msg="Please enter valid email id";
		
	}
	echo json_encode(['status'=>$status,'msg'=>$msg]);
}

if(isset($_POST['otp_email'])){
	$email=mysqli_real_escape_string($con,$_POST['otp_email']);
	
	$link="http://127.0.0.1/php_class/260421/100621/email_verify.php?email=$email";
	
	$emailMsg="<a href='$link'>Click</a> here to verify your email id";
	
	smtp_mailer($email,"Verify Your Email Id",$emailMsg);
	
	$status="success";
	$msg="Please check your email id";
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