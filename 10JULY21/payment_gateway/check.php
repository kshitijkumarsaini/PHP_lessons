<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/64231b79566447acb8a569cd12e3b606/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
           array("X-Api-Key:test_31f8b438e71c194dfe7ed4be918",
					  "X-Auth-Token:test_c99123c5992a5fd31cf7192f98b"));
$response = curl_exec($ch);
$response=json_decode($response,true);
curl_close($ch); 

echo "<pre>";
print_r($response);
?>