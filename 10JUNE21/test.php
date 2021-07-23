<?php
$fields = array(
    "sender_id" => "TXTIND",
    "message" => "Your OTP 123",
    "route" => "v3",
    "numbers" => "7018793100",
);
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: zLGOwcTnjvqmJPlChQy3MYu0epXBFNiKWgr96ZtUD75AoaIxSdlHtRxoOvs8eShBaGE45XJ3T0KjZbmF",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

$response=json_decode($response,true);
if(isset($response['request_id'])){
	echo "Please check your mobile";	
}else{
	echo "Please try after sometime";
}
?>