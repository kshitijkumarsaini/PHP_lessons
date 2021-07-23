<?php
//if statement
//if else statement
//if elseif else statement
//switche

/*$name="Amit";
if($name=="Vishal"){
	echo "Good";
	echo "Delhi";
}else{	
	echo "Bad";
}*/
	
/*$x="10";
if($x===10){
	echo "Yes";
}else{
	echo "No";
}*/

/*$name=strtolower("Vishal");
if($name=="vishal"){
	echo "Good";
}elseif($name=="amit"){
	echo "V Good";
}elseif($name=="sumit"){
	echo "V V Good";
}else{	
	echo "Bad";
}*/

$name="Amit";
switch($name){
	case 'Vishal':
	echo "Good";
	break;
	
	case 'Amit':
	echo "V Good";
	break;
	
	case 'Sumit':
	echo "V V Good";
	break;
	
	default:
	echo "Bad";
}
?>