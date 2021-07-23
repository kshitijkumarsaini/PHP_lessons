<?php
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$url="http://127.0.0.1/php_class/260421/api/010721/core/registration.php";
	$arr=['name'=>$name,'email'=>$email,'password'=>$password];
	$ch=curl_init();
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$arr);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	$result=curl_exec($ch);
	curl_close($ch);
	
	$result=json_decode($result,true);
	if(isset($result['status'])){
		if($result['status']=='success'){
			echo "Thanks";
		}else{
			if($result['code']==1){
				echo "Email id already present";	
			}elseif($result['code']==2){
				echo "Please try after sometime";	
			}
		}
	}else{
		echo "Please try after sometime";
	}
	
}
?>

<form method="post">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name"/></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email"/></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"/></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit"/></td>
		</tr>
	</table>
</form>