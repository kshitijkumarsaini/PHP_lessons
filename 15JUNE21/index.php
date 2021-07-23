<?php
echo time();
die();
define('SITE_ACCESS','yes');
include('query.php');
$arr=['name'=>'aa1','city'=>'aa@gmail1.com','marks'=>10];
$condition=["name"=>'aa'];
$obj=new query();
$obj->updateData('student',$arr,$condition);
?>