<?php
/*
POST
GET
*/
/*
input
	textbox
	file
	checkbox
	radio
textarea
select
button
*/
if(isset($_POST['submit'])){
	$fname=$_POST['fname'];
	echo "Welcome $fname";
}
?>
<form method="post">
	<input type="textbox" name="fname"/>
	<input type="submit" name="submit"/>
</form>