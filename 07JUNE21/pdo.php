<?php
$con=new PDO("mysql:host=localhost;dbname=260421","root","");
$stmt=$con->prepare("select * from users");
$stmt->execute();

$result=$stmt->fetchALL(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($result);
?>