<?php
class homeModel{
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
	
	static function getConnection(){
		return new self();
	}
	
	function con(){
		return $this->con;
	}
	
	function getPage($id){
		$sql="select * from pages where id='$id'";
		$res=mysqli_query($this->con,$sql);
		if(mysqli_num_rows($res)>0){
			$row=mysqli_fetch_assoc($res);
			return $row;
		}
	}
	
}

?>