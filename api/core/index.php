<?php
$con=mysqli_connect("localhost","root","","260421");
if(isset($_GET['key']) && $_GET['key']!=''){
	$key=$_GET['key'];	
	$res=mysqli_query($con,"select * from auth_key where auth_key='$key'");
	if(mysqli_num_rows($res)>0){
		$row=mysqli_fetch_assoc($res);
		if($row['status']==1){
			if($row['max_count']==$row['count'] && $row['max_count']>0){
				$data="Limit exceeded";
				$status="error";
				$code=1;
			}else{
				mysqli_query($con,"update auth_key set count=count+1 where auth_key='$key'");
			
				$res=mysqli_query($con,"select name,city from student");
				$data=[];
				while($row=mysqli_fetch_assoc($res)){
					$data[]=$row;
					$status="success";
					$code='';
				}
			}	
		}else{
			$data="Key deactivated";
			$status="error";
			$code=2;
		}
	}else{
		$data="Please enter valid key";
		$status="error";
		$code=3;
	}
}else{
	$data="Please enter key";
	$status="error";
	$code=4;
}
echo json_encode(['status'=>$status,'data'=>$data,'code'=>$code]);
?>