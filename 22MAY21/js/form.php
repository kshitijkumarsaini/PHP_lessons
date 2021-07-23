<form method="post" id="frm">
	Name:- <input type="text" name="name" id="name"/>
	
	<input type="button" name="submit" id="submit" value="Submit" onclick="submit_data()"/>
</form>

<div id="msg"></div>

<script src="jquery-3.6.0.min.js"></script>

<script>
function submit_data(){
	jQuery('#msg').html('<img src="images/loader.gif" width="150px"/>');
	var name=jQuery('#name').val();
	jQuery('#submit').val('Please wait...');
	jQuery('#submit').attr('disabled',true);
	jQuery.ajax({
		url:'submit.php',
		type:'post',
		data:'name='+name,
		success:function(result){
			//jQuery('#name').val('');
			jQuery('#frm')[0].reset();
			jQuery('#msg').html(result);
			jQuery('#submit').val('Submit');
			jQuery('#submit').attr('disabled',false);
		}
	});
}
</script>