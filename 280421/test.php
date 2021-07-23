<?php
/*$str="Delhi Mumbai Pune Agra";
$arr=explode(" ",$str);
echo "<pre>";
print_r($arr);*/

/*$arr=["Delhi","Mumbai","Pune"];
echo implode(", ",$arr);*/

$str="vIShal guPTa";
$arr=explode(" ",$str);
$name=ucwords(strtolower($arr[0]));
echo "Welcome $name";
?>