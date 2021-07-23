<?php
require('include/header.php');
if(isset($_GET['id']) && $_GET['id']>0){
	$id=getSafeValue($_GET['id']);
	$res=mysqli_query($con,"select * from student where id='$id'");
	$row=mysqli_fetch_assoc($res);
	$name=$row['name'];
	$marks=$row['marks'];
	$city=$row['city'];
}else{
	$name='';
	$marks='';
	$city='';
	$id='';
}

if(isset($_POST['submit'])){
	$name=getSafeValue($_POST['name']);
	$marks=getSafeValue($_POST['marks']);
	$city=getSafeValue($_POST['city']);
	$added_on=date('Y-m-d h:i:s');
	
	if($id>0){
		mysqli_query($con,"update student set name='$name',city='$city',marks='$marks' where id='$id'");
		$msg="Data updated";
	}else{
		mysqli_query($con,"insert into student(name,city,marks,added_on) value('$name','$city','$marks','$added_on')");
		$msg="Data inserted";
	}
	setSessionFlash($msg);
	
	redirect('dashboard.php');
}
?>
<a href="dashboard.php">Back</a>
<br/><br/>
<form method="post">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" value="<?php echo $name?>" name="name" required/></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" value="<?php echo $city?>" name="city" required/></td>
		</tr>
		<tr>
			<td>Marks</td>
			<td><input type="text" value="<?php echo $marks?>" name="marks" required/></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit"></td>
		</tr>
	</table>
</form>