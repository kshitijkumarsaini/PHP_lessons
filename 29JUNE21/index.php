<?php
session_start();
if(isset($_POST['submit'])){
	$str=$_POST['str'];
	if($str==$_SESSION['CAPTCHA_STR']){
		echo "done";
	}else{
		echo "Please enter valid captcha details";
	}
}
?>
<form method="post">
	<input type="text"><br/>
	<input type="text" name="str"/>
	<img src="test.php" id="img"/>
	<a href="javascript:void(0)" onclick="CaptchaRegenerate()">Captcha Regenerate</a>
	<input type="submit" name="submit"/>
</form>

<script>
function CaptchaRegenerate(){
	var img=document.getElementById('img');
	img.src="test.php";
}
</script>