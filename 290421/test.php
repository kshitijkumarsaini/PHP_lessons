<?php
$arr=array(
	array(
		'name'=>'Vishal',
		'city'=>array('Delhi','Pune'),
		'education'=>array(
			'pg'=>array('M.Tech'),
			'ug'=>array('B.Sc','B.Tech')
		)
	),
	array('name'=>'Amit')
);
echo '<pre>';
//print_r($arr[0]['education']['ug'][1]);
print_r($arr);
?>