<?php
$num1="";
$num2="";
if(isset($_POST['submit'])){
	$num1=(int)$_POST['num1'];
	$num2=(int)$_POST['num2'];
	echo $num1+$num2;
	if($num1==0){
		$num1="";
	}if($num2==0){
		$num2="";
	}
}
?>
<form method="post">
	Num1 <input type="textbox" name="num1" value="<?php echo $num1?>"/><br/><br/>
	Num2 <input type="textbox" name="num2" value="<?php echo $num2?>"/><br/><br/>
	<input type="submit" name="submit"/>
</form>