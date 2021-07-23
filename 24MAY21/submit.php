<?php
date_default_timezone_set('Asia/Kolkata'); 
$con=mysqli_connect('localhost','root','','260421');
$name=$_POST['name'];
$city=$_POST['city'];
$marks=$_POST['marks'];
$added_on=date('Y-m-d h:i:s');
mysqli_query($con,"insert into student(name,city,marks,added_on) values('$name','$city','$marks','$added_on')");
echo "Data inserted";
?>