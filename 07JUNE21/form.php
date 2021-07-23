<?php
$name_msg="";
if(isset($_POST['submit'])){
	$name=trim($_POST['name']);
	if($name!=''){
		if(!preg_match("/^[A-Za-z]*$/",$name)){
			$name_msg="Please enter your valid name";
		}
	}else{
		$name_msg="Please enter your name";
	}
}
?>
<form method="post">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name">
			<br/><?php echo $name_msg?>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit"/></td>
		</tr>
	</table>
</form>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
<script>
jQuery(document).ready(function () {
	/*jQuery("input[name*='name']").keyup(function () { 
		this.value = this.value.replace(/[^A-Z a-z\.]/g,'');
	});*/
	
	/*jQuery("input[name*='name']").keypress(function (e) {
		if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
			return false;
		}
	});*/	
});
</script>