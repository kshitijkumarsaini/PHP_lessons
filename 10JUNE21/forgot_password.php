<form id="frmForgotPassword">
	<table>
		
		<tr>
			<td>Email</td>
			<td><input type="email" name="email" required id="email"/></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" id="btn">
			<a href="login.php">Login</a>
			</td>
		</tr>
	</table>
</form>

<div id="result"></div>
<script src="jquery-3.6.0.min.js"></script>
<script>
jQuery('#frmForgotPassword').submit(function(e){
	jQuery('#result').html('Please wait...');
	e.preventDefault();
	jQuery.ajax({
		url:'forgot_password_check.php',
		type:'post',
		data:jQuery('#frmForgotPassword').serialize(),
		success:function(result){
			result=jQuery.parseJSON(result);
			if(result.status=='success'){
				window.location.href="login.php";
			}else{
				setTimeout(function(){
					jQuery('#result').html('');
				},5000);
			}
			jQuery('#result').html(result.msg);
			
			
		}
	});
});
</script>