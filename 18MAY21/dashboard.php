<?php
require('include/header.php');

if(isset($_GET['type']) && $_GET['type']=='delete' && isset($_GET['id']) && $_GET['id']>0){
	$id=getSafeValue($_GET['id']);
	mysqli_query($con,"delete from student where id='$id'");
	setSessionFlash("Data deleted");
	redirect('dashboard.php');
}

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
			<a href="form.php?id=<?php echo $row['id']?>">Edit</a>
			<a href="javascript:void(0)" onclick="confirm_delete('<?php echo $row['id']?>','delete')">Delete</a>
		</td>
	</tr>
	<?php } ?>
</table>

<?php } else {
	echo 'Data not found';
}
?>
<script>
function confirm_delete(id,type){
	var result=confirm('Are your sure?');
	if(result==true){
		window.location.href='?id='+id+'&type='+type;
	}
}
</script>