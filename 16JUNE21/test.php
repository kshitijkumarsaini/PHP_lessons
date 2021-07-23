<?php
/*
Only abstract function
No __construct
No object
*/

interface first{
	function hello();
}

interface second{
	function hello1();
}

class test implements first,second{
	function hello(){
		
	}
	function hello1(){
		
	}
}
$obj=new test();
?>