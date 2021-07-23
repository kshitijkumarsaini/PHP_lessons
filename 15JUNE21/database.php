<?php
if(!defined('SITE_ACCESS')){
	die('Page not found');
}

class database{
	private $host;
	private $username;
	private $password;
	private $dbname;
	protected $con;
	function __construct(){
		$this->host="localhost";
		$this->username="root";
		$this->password="";
		$this->dbname="260421";
		$this->con=mysqli_connect($this->host,$this->username,$this->password,$this->dbname);	
	}
}
?>