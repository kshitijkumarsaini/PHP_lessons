<?php
class baseController{
	private $view_path;
	private $helper_path;
	function __construct(){
		$this->view_path="view/";
		$this->helper_path="system/helper/";
	}
	
	function loadView($view,$arrData=''){
		if(file_exists($this->view_path.$view.'.php')){
			include($this->view_path.$view.'.php');
		}else{
			die($this->view_path.' view not found');
		}
	}
	
	function loadHelper($helper){
		if(file_exists($this->helper_path.$helper.'.php')){
			include($this->helper_path.$helper.'.php');
		}else{
			die($helper.' helper not found');
		}
	}
}
?>