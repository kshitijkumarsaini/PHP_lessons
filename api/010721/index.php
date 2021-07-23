<?php
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$city=$_POST['city'];
	$marks=$_POST['marks'];
	
	$url="http://127.0.0.1/php_class/260421/api/010721/core/index.php";
	$arr=['name'=>$name,'city'=>$city,'marks'=>$marks];
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
			echo "Please try after sometime";
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
			<td>City</td>
			<td><input type="text" name="city"/></td>
		</tr>
		<tr>
			<td>Marks</td>
			<td><input type="text" name="marks"/></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit"/></td>
		</tr>
	</table>
</form>