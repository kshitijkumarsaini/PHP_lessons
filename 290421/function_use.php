<?php
function getWelcomeMsg($str){
	$arr=explode(" ",$str);
	$name=ucwords(strtolower($arr[0]));
	$html="Welcome $name";
	return $html;
}
echo getWelcomeMsg("vIShal guPTa");
?>