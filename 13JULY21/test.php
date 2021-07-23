<?php
$arr=json_encode(["vishal"=>"Amit"]);
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,"http://127.0.0.1/php_class/260421/130721/api/test.php");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_CUSTOMREQUEST,'PUT');
curl_setopt($ch,CURLOPT_POSTFIELDS,$arr);
$result=curl_exec($ch);
curl_close($ch);
echo "<pre>";
print_r($result);
?>