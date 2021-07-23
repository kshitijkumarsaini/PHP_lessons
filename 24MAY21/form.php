<form id="frm" method="post">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" id="name" required/></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" name="city" id="city" required/></td>
		</tr>
		<tr>
			<td>Marks</td>
			<td><input type="number" name="marks" id="marks" required/></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" id="submit"/></td>
		</tr>
	</table>
</form>
<div id="msg"></div>
<script src="jquery-3.6.0.min.js"></script>

<script>
jQuery('#frm').submit(function(e){
	e.preventDefault();
	var name=jQuery('#name').val();
	var city=jQuery('#city').val();
	var marks=jQuery('#marks').val();
	var frm_data='name='+name+'&city='+city+'&marks='+marks;
	jQuery.ajax({
		url:'submit.php',
		type:'post',
		data:frm_data,
		success:function(result){
			jQuery('#frm')[0].reset();
			jQuery('#msg').html(result);
		}
	});
});
</script>