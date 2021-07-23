<?php
require('include/header.php');
$res=mysqli_query($con,"select * from student order by added_on desc");

showSessionFlash();

?>
<a href="form.php">Add Data</a>
<br/><br/>

<?php if(mysqli_num_rows($res)>0){?>

<table border="1">
	<tr>
		<td>S.No</td>
		<td>Name</td>
		<td>City</td>
		<td>Marks</td>
		<td>Added On</td>
		<td></td>
	</tr>
	<?php 
	$i=1;
	while($row=mysqli_fetch_assoc($res)){?>
	<tr>
		<td><?php echo $i++?></td>
		<td><?php echo $row['name']?></td>
		<td><?php echo $row['city']?></td>
		<td><?php echo $row['marks']?></td>
		<td><?php echo showMyDate($row['added_on'])?></td>
		<td>
			<a href="">Edit</a>
			<a href="">Delete</a>
		</td>
	</tr>
	<?php } ?>
</table>

<?php } else {
	echo 'Data not found';
}
?>