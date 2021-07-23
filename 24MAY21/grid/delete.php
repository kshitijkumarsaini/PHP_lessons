<?php
require('include/database.php');
require('include/function.php');
$id=$_POST['id'];
mysqli_query($con,"delete from student where id='$id'");
?>