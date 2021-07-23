<?php
include('vendor/autoload.php');
$html="<table border='1'><tr><td class='table'>Vishal</td></tr></table>";
$css=file_get_contents('style.css');
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($css,1);
$mpdf->WriteHTML($html,2);
$file='file.pdf';
/*
D: forcefully download
I: Print
F: Save to folder
S: Return pdf 
*/
$mpdf->Output($file,'I');
?>