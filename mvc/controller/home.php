<?php
include('system/controller/baseController.php');
class home extends baseController{
	private $model;
	function __construct(){
		parent::__construct();
		$this->loadHelper('common');
		include('model/homeModel.php');
		$this->model=new homeModel();
	}
	
	function page(){
		$data=$this->model->getPage($_GET['id']);
		$this->loadView('header',['title'=>$data['title']]);	
		$this->loadView('page',$data);
		$this->loadView('footer');		
	}
}
?>