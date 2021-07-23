<?php
if(isset($_POST['vote'])){
	if(isset($_COOKIE['vote'])){
		echo "Already voted";
	}else{
		setcookie('vote',$_POST['vote'],time()+(60*60*24));
		echo "Thanks for voting";
	}
}
?>
<form method="post">
	<input type="submit" name="vote" value="MI"/>
	vs
	<input type="submit" name="vote" value="CSK"/>
</form>