<?php
/*
No object
Atleast 1 abstract function
You can add __construct
*/
abstract class rbi{
	public $x;
	function __construct(){
		$this->x=10;
	}
	
	abstract function id_proff();
	
	function policy(){
		
	}
}

class hdfc extends rbi{
	function id_proff(){
		
	}
	
	function open_account(){
		echo "Done";
	}
}

class sbi extends rbi{
	function id_proff(){
		
	}
	
	function open_account(){
		echo $this->x;
	}
}
$obj=new sbi();
$obj->open_account();
?>