<?php
if(!defined('SITE_ACCESS')){
	die('Page not found');
}

include('database.php');
class query extends database{
	function insertData($table,$arr){
		$field="";
		$value="";
		foreach($arr as $key=>$val){
			$field.=$key.",";
			$value.="'".$val."',";
		}
		$field=rtrim($field,",");
		$value=rtrim($value,",");
		$sql="insert into $table($field) values($value)";
		mysqli_query($this->con,$sql);
	}
	
	function updateData($table,$arr,$condition){
		$data="";
		$cond="";
		foreach($arr as $key=>$val){
			$data.="$key='$val',";
		}
		foreach($condition as $key=>$val){
			$cond.="$key='$val' and";
		}
		$data=rtrim($data,",");
		$cond=rtrim($cond,"and");
		$sql="update $table set $data where $cond";
		mysqli_query($this->con,$sql);
	}
}
?>