<?php
$marks = "asdsa";

if($marks>0){
	if($marks>60){
		echo "First Class";
	}elseif($marks>=45 && $marks<=60){
		echo "Second Class";
	}else{
		echo "Third Class";
	}
}else{
	echo "Please provide valid marks";
}
?>