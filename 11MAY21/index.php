<?php
if(isset($_POST['submit'])){
	foreach($_FILES['doc']['name'] as $key=>$val){
		$file=str_shuffle("abcdefghijklmnopqrstuvwxyz123456789abcdefghijklmnopqrstuvwxyz123456789");
		$file=substr($file,0,20);
		$ext=pathinfo($_FILES['doc']['name'][$key],PATHINFO_EXTENSION);
		move_uploaded_file($_FILES['doc']['tmp_name'][$key],'media/'.$file.'.'.$ext);
	}
}
?>
<form method="post" enctype="multipart/form-data">
	<input type="file" name="doc[]" multiple>
	<input type="submit" name="submit"/>
</form>
