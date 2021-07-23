<?php
if(isset($_POST['submit'])){
	//echo '<pre>';
	//print_r($_FILES);	
	//$file=rand(111111111,999999999).'_'.rand(111111111,999999999).'_'.rand(111111111,999999999);
	$file=str_shuffle("abcdefghijklmnopqrstuvwxyz123456789abcdefghijklmnopqrstuvwxyz123456789");
	$file=substr($file,0,20);
	$ext=pathinfo($_FILES['doc']['name'],PATHINFO_EXTENSION);
	
	/*if($ext=='jpg' || $ext=='jpeg' || $ext=='png'){
		move_uploaded_file($_FILES['doc']['tmp_name'],'media/'.$file.'.'.$ext);
	}else{
		echo "Please select valid file";
	}*/
	
	if($_FILES['doc']['size']>1024*300){
		echo "Size must be less the 300 KB";
	}else{
		move_uploaded_file($_FILES['doc']['tmp_name'],'media/'.$file.'.'.$ext);
	}
	
}
?>
<form method="post" enctype="multipart/form-data">
	<input type="file" name="doc">
	<input type="submit" name="submit"/>
</form>
