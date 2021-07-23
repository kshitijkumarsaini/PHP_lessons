<?php
if(!file_exists('counter.txt')){
	touch('counter.txt');
	$f=fopen('counter.txt','w');
	fwrite($f,1);
	fclose($f);
}
$f=fopen('counter.txt','r');
$counter=fread($f,filesize('counter.txt'));
echo "Total Visit $counter";
$counter++;
fclose($f);

$f=fopen('counter.txt','w');
fwrite($f,$counter);
fclose($f);

/*$f=fopen('counter.txt','a');
fwrite($f,"\nVishal");
fclose($f);*/
?>