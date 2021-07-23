<?php
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,"http://127.0.0.1/php_class/260421/api/core/index.php?key=vishal");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($ch);
curl_close($ch);

$result=json_decode($result,true);

if(isset($result['status'])){
	if($result['status']=='error'){
		echo $result['code'];
	}else{
		echo "<pre>";
		print_r($result['data']);
	}
}else{
	echo "api code error";
}
?>