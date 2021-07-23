<?php
$con=mysqli_connect('localhost','root','','260421');

/*
mysqli_query($con,"insert into student(name,city,marks) values('Vishal','Noida',60)");
echo mysqli_insert_id($con);
*/

//mysqli_query($con,"update student set marks=75 WHERE id=7");

//mysqli_query($con,"delete from student where id=7");

$res=mysqli_query($con,"select * from student");
echo mysqli_num_rows($res);

/*while($row=mysqli_fetch_assoc($res)){
	echo "<pre>";
	print_r($row);
}*/
?>