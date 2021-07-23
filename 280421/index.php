<?php
//$arr=array(10,20,30);
$arr=[10,20,30];
$arr[]="Vishal";
/*$arr[]="Vishal";
echo "<pre>";
print_r($arr);*/
foreach($arr as $key=>$val){
	echo $key;
	echo $val;
	echo "<br/>";
}
?>