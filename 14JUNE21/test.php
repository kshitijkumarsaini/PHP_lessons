<?php
class student{	
	private $x;
	function __construct(){
		$this->x=10;
	}
}

class student1 extends student{	
	function hello(){
		echo $this->x;
	}
}
$obj=new student1();
$obj->hello();
?>