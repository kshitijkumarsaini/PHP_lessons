<form id="frmLogin">
	<table>
		
		<tr>
			<td>Email</td>
			<td><input type="email" name="email" required id="email"/></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" required/></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" id="btn">
			<a href="forgot_password.php">Forgot Password</a>
			</td>
		</tr>
	</table>
</form>

<div id="result"></div>
<script src="jquery-3.6.0.min.js"></script>
<script>
jQuery('#frmLogin').submit(function(e){
	jQuery('#result').html('Please wait...');
	e.preventDefault();
	jQuery.ajax({
		url:'login_check.php',
		type:'post',
		data:jQuery('#frmLogin').serialize(),
		success:function(result){
			result=jQuery.parseJSON(result);
			if(result.status=='success'){
				window.location.href="dashboard.php";
			}else if(result.status=='otp_verify'){
				
			}else{
				setTimeout(function(){
					jQuery('#result').html('');
				},5000);
			}
			jQuery('#result').html(result.msg);
			
			
		}
	});
});

function sendOTPVerify(){
	jQuery('#result').html('Please wait...');
	jQuery.ajax({
		url:'login_check.php',
		type:'post',
		data:'otp_email='+jQuery('#email').val(),
		success:function(result){
			result=jQuery.parseJSON(result);
			if(result.status=='success'){
				//window.location.href="dashboard.php";
			}
			jQuery('#result').html(result.msg);
			setTimeout(function(){
				jQuery('#result').html('');
			},5000);
		}
	});
}
</script>