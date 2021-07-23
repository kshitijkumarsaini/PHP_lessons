<?php
function prx($arr){
	echo '<pre>';
	print_r($arr);
	die();
}

function redirect($link){
	?>
	<script>
	window.location.href='<?php echo $link?>';
	</script>
	<?php
}

function isValidAccess(){
	if(!isset($_SESSION['UID'])){
		redirect('index.php');
	}
}

function isNotValidAccess(){
	if(isset($_SESSION['UID'])){
		redirect('dashboard.php');
	}
}

function getSafeValue($str){
	global $con;
	if($str!=''){
		$str=filter_var($str,FILTER_SANITIZE_STRING);
		return mysqli_real_escape_string($con,$str);
	}
}

function setSessionFlash($msg){
	$_SESSION['FORM_MSG']=$msg;
}

function showSessionFlash(){
	if(isset($_SESSION['FORM_MSG'])){
		echo $_SESSION['FORM_MSG'];
		unset($_SESSION['FORM_MSG']);
	}
}

function showMyDate($date){
	if($date!=''){
		$date=strtotime($date);
		return date('d-M-Y',$date);
	}
}
?>