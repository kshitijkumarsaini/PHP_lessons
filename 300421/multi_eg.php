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
$heading=[];
foreach($arr as $list){
	foreach($list as $key=>$val){
		$heading[$key]=$key;
	}
}
?>
<table border="1">

	<tr>
		<?php foreach($heading as $list){?>
			<td><?php echo $list?></td>
		<?php } ?>
	</tr>
	
	<?php foreach($arr AS $arrList){?>
	<tr>
		<?php foreach($arrList AS $list){?>
			<td><?php echo $list?></td>
		<?php }?>
	</tr>
	<?php }?>
	
</table>