<?php
$asoArr = array(
	'heading' => array('#'=>"#",'name'=>"Name",'age'=>"Age",'city'=>'City'),
	'student1' => array('#'=>"1",'name'=>"Ankit",'age'=>"20","city"=>"Delhi"),
	'student2' => array('#'=>"2",'name'=>"Gopal",'age'=>"25","city"=>"Noida")
);

echo "<table>";
	foreach($asoArr AS $arrList){
		echo "<tr>";
			foreach($arrList AS $list){
				echo "<td>$list</td>";
			}
		echo "</tr>";
	}
echo "</table>";
?>