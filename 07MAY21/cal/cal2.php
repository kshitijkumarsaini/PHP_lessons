<?php
$num1="";
$num2="";
if(isset($_POST['submit'])){
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	if($_POST['submit']=='Add'){
		echo $num1+$num2;
	}elseif($_POST['submit']=='Sub'){
		echo $num1-$num2;
	}elseif($_POST['submit']=='Div'){
		echo $num1/$num2;
	}elseif($_POST['submit']=='Mul'){
		echo $num1*$num2;
	}
}
?>
<form method="post">
	Num1 <input type="text" name="num1" value="<?php echo $num1?>"/><br/><br/>
	Num2 <input type="text" name="num2"  value="<?php echo $num2?>"/><br/><br/>
	<input type="submit" value="Add" name="submit"/>
	<input type="submit" value="Sub" name="submit"/>
	<input type="submit" value="Mul" name="submit"/>
	<input type="submit" value="Div" name="submit"/>
	<br/><br/>
</form>