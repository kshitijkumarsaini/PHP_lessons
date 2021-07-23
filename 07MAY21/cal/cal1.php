<?php
$num1="";
$num2="";
if(isset($_POST['add'])){
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	echo $num1+$num2;
}elseif(isset($_POST['sub'])){
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	echo $num1-$num2;
}elseif(isset($_POST['mul'])){
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	echo $num1*$num2;
}elseif(isset($_POST['div'])){
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	echo $num1/$num2;
}else{
	
}
?>
<form method="post">
	Num1 <input type="text" name="num1" value="<?php echo $num1?>"/><br/><br/>
	Num2 <input type="text" name="num2"  value="<?php echo $num2?>"/><br/><br/>
	<input type="submit" value="Add" name="add"/>
	<input type="submit" value="Sub" name="sub"/>
	<input type="submit" value="Mul" name="mul"/>
	<input type="submit" value="Div" name="div"/>
	<br/><br/>
</form>