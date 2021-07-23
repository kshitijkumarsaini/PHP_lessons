<form id="frmReg">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" required/></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="email" name="email" required/></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" required/></td>
		</tr>
		<tr>
			<td>Mobile</td>
			<td><input type="text" name="mobile" required/></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" id="btn"></td>
		</tr>
	</table>
</form>

<form id="frmOTP">
	<table>
		<tr>
			<td>OTP</td>
			<td><input type="text" name="otp" required/></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Verify Now"></td>
		</tr>
	</table>
</form>
<div id="result"></div>
<script src="jquery-3.6.0.min.js"></script>
<script>
jQuery('#frmReg').submit(function(e){
	jQuery('#result').html('Please wait...');
	e.preventDefault();
	jQuery.ajax({
		url:'submit.php',
		type:'post',
		data:jQuery('#frmReg').serialize(),
		success:function(result){
			result=jQuery.parseJSON(result);
			if(result.status=='success'){
				jQuery('#frmReg')[0].reset();
				jQuery('#frmReg').hide();
				jQuery('#frmOTP').show();
				jQuery('#result').html('');
			}else{
				jQuery('#result').html(result.msg);
				setTimeout(function(){
					jQuery('#result').html('');
				},5000);
			}
		}
	});
});

jQuery('#frmOTP').submit(function(e){
	jQuery('#result').html('Please wait...');
	e.preventDefault();
	jQuery.ajax({
		url:'submit.php',
		type:'post',
		data:jQuery('#frmOTP').serialize(),
		success:function(result){
			result=jQuery.parseJSON(result);
			if(result.status=='success'){
				jQuery('#frmOTP')[0].reset();
			}
			jQuery('#result').html(result.msg);
		}
	});
});
</script>

<style>
#frmOTP{
	display:none;
}
</style>