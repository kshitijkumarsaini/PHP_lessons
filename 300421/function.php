<?php
$x=20;
function getData(){
	global $x;
	$x=30;
}
getData();
echo $x;
?>