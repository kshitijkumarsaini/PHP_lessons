<?php
function prx($arr){
	echo '<pre>';
	print_r($arr);
}

function topNav(){
	$sql="select * from pages";
	$res=mysqli_query(homeModel::getConnection()->con(),$sql);
	if(mysqli_num_rows($res)>0){
		$arr=[];
		while($row=mysqli_fetch_assoc($res)){
			$arr[]=$row;
		}
		return $arr;
	}
}
?>