<?php
class student{	
	protected $x;
	function __construct(){
		$this->x=10;
	}
	
	function getX(){
		return $this->x;
	}
	
	function setX($name){
		$this->x=$name;
	}
}
$obj=new student();
echo $obj->setX('Vishal');
echo $obj->getX();
?>