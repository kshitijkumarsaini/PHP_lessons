<?php
$con=mysqli_connect("localhost","root","","260421");

$cache_file="cache/index.cache.php";

if(file_exists($cache_file) && filemtime($cache_file) > time()-30){
	echo "From Cache<br/>";
	include($cache_file);
}else{
	$res=mysqli_query($con,"select * from users");
	$html="";
	while($row=mysqli_fetch_assoc($res)){
		$html.="Name:".$row['name'].'<br/>Email:'.$row['email'].'<br/><br/>';	
	}
	$f=fopen($cache_file,'w');
	fwrite($f,$html);
	fclose($f);
	echo "Cache created<br/>";
	echo $html;	
}
?>