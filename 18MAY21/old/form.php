<?php
require('include/header.php');
if(isset($_POST['submit'])){
	$name=getSafeValue($_POST['name']);
	$marks=getSafeValue($_POST['marks']);
	$city=getSafeValue($_POST['city']);
	$added_on=date('Y-m-d h:i:s');
	
	mysqli_query($con,"insert into student(name,city,marks,added_on) value('$name','$city','$marks','$added_on')");
	setSessionFlash("Data inserted");
	redirect('dashboard.php');
}
?>
<a href="dashboard.php">Back</a>
<br/><br/>
<form method="post">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" required/></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" name="city" required/></td>
		</tr>
		<tr>
			<td>Marks</td>
			<td><input type="text" name="marks" required/></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit"></td>
		</tr>
	</tab