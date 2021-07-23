<?php
$defaultController="home";
$defaultFunction="index";
if(isset($_GET['c']) && $_GET['c']!=''){
	$defaultController=$_GET['c'];
}

if(file_exists('controller/'.$defaultController.'.php')){
	include('controller/'.$defaultController.'.php');
	$obj=new $defaultController();
}else{
	die('controller not found');
}


if(isset($_GET['f']) && $_GET['f']!=''){
	$defaultFunction=$_GET['f'];
}


if(method_exists($obj,$defaultFunction)){
	$obj->$defaultFunction();
}else{
	die('function not found');
}
?>