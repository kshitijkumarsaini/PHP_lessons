<?php
session_start();
$_SESSION['CAPTCHA_STR']=rand(1111,9999);
$im=imagecreatetruecolor(50,25);
$bg=imagecolorallocate($im,96,218,34);
$fcolor=imagecolorallocate($im,255,255,255);
imagefill($im,0,0,$bg);
imagestring($im,rand(3,9),rand(1,7),rand(1,7),$_SESSION['CAPTCHA_STR'],$fcolor);
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
?>