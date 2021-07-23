<?php
if(isset($_POST['submit'])){
	
	$arr=["file"=>curl_file_create($_FILES['file']['tmp_name'],$_FILES['file']['type'],$_FILES['file']['name'])];
	
	$ch=curl_init();
	curl_setopt($ch,CURLOPT_URL,"http://127.0.0.1/php_class/260421/130721/api/api.php");
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	
	curl_setopt($ch,CURLOPT_POST,1);
	
	curl_setopt($ch,CURLOPT_POSTFIELDS,$arr);
	$result=curl_exec($ch);
	curl_close($ch);
	
	echo "<pre>";
	print_r($result);
	
}
?>
<form method="post" enctype="multipart/form-data">
	<input type="file" name="file"/>
	<input type="submit" name="submit"/>
</form>