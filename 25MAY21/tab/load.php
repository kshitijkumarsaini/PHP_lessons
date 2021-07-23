<?php
$con=mysqli_connect('localhost','root','','260421');
$id=$_POST['id'];
$row=mysqli_fetch_assoc(mysqli_query($con,"select * from pages where id='$id' and status='1'"));
echo $row['desc'];
?>