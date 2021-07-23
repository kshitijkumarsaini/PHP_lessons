<?php
$arr=[
	"name"=>"Vishal",
	"age"=>"10",
	"fname"=>"Satish",
	"mobile"=>"3456"
];
/*$arr[]="Delhi";
echo "<pre>";
print_r($arr);*/
foreach($arr as $key=>$val){
	//echo $key;
	echo ucfirst($key).': '.$val;
	echo "<br/>";
}
?>