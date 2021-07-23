<?php
require('include/database.php');
require('include/function.php');
isValidAccess();
if(isset($_GET['id']) && $_GET['id']>0){
	$id=getSafeValue($_GET['id']);
	mysqli_query($con,"delete from student where id='$id'");
	setSessionFlash("Data deleted");
}
redirect('dashboard.php');
?>