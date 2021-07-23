<?php
$asoArr = array(
	'heading' => array('#'=>"#",'name'=>"Name",'age'=>"Age",'city'=>'City'),
	'student1' => array('#'=>"1",'name'=>"Ankit",'age'=>"20","city"=>"Delhi"),
	'student2' => array('#'=>"2",'name'=>"Gopal",'age'=>"25","city"=>"Noida")
);
?>
<table>
	<?php foreach($asoArr AS $arrList){?>
	<tr>
		<?php foreach($arrList AS $list){?>
			<td><?php echo $list?></td>
		<?php }?>
	</tr>
	<?php }?>
</table>