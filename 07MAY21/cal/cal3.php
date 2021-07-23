<?php
$num1="";
$num2="";
if(isset($_POST['submit'])){
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$operation=$_POST['submit'];
	$exp=$num1.$operation.$num2;
	$result=eval("echo $exp;");
}
?>
<form method="post">
	Num1 <input type="text" name="num1" value="<?php echo $num1?>"/><br/><br/>
	Num2 <input type="text" name="num2"  value="<?php echo $num2?>"/><br/><br/>
	<input type="submit" value="+" name="submit"/>
	<input type="submit" value="-" name="submit"/>
	<input type="submit" value="*" name="submit"/>
	<input type="submit" value="/" name="submit"/>
	<br/><br/>
</form>