<?php
$arr=array(
	'student1'=>array("name"=>"Vishal",
		"age"=>"10",
		"fname"=>"Satish",
		"mobile"=>"3456",
		"city"=>"Delhi"),
	'student2'=>array("name"=>"Amit",
		"age"=>"13",
		"fname"=>"ABC",
		"mobile"=>"444",
		"city"=>"Patna"),
	'student3'=>array("name"=>"Submit",
		"age"=>"45",
		"fname"=>"FFGG",
		"mobile"=>"3333",
		"city"=>"Noida"),
);
?>
<table border="1">
	<tr>
		<td>Name</td>
		<td>Age</td>
		<td>Fname</td>
		<td>Mobile</td>
	</tr>
	<?php foreach($arr as $list){?>
	<tr>
		<td><?php echo $list['name']?></td>
		<td><?php echo $list['age']?></td>
		<td><?php echo $list['fname']?></td>
		<td><?php echo $list['mobile']?></td>
	</tr>
	<?php } ?>
</table>