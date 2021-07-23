<?php
$con=new mysqli("localhost","root","","260421");
$result=$con->query("select * from users");
if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		echo "<pre>";
		print_r($row);
	}
}else{
	echo "No data found";
}
?>