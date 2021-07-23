<?php
include('db.php');
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	mysqli_query($con,"insert into temp_user(name) values('$name')");
	$id=mysqli_insert_id($con);
	header('location:preview.php?id='.$id);
	die();
}	
?>
<form method="post">
	<input type="text" name="name"/>
	<input type="submit" name="submit"/>
</form>