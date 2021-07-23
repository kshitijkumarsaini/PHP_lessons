<?php
require('include/header.php');
$res=mysqli_query($con,"select * from student order by added_on desc");

if(mysqli_num_rows($res)>0){?>
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
	<tr id="box<?php echo $row['id']?>">
		<td><?php echo $i++?></td>
		<td><?php echo $row['name']?></td>
		<td><?php echo $row['city']?></td>
		<td><?php echo $row['marks']?></td>
		<td><?php echo showMyDate($row['added_on'])?></td>
		<td>
			<a href="javascript:void(0)" onclick="confirm_delete('<?php echo $row['id']?>')">Delete</a>
		</td>
	</tr>
<?php } } ?>
</table>
<br/>


<script src="jquery-3.6.0.min.js"></script>
<script>
function confirm_delete(id){
	var result=confirm('Are your sure?');
	if(result==true){
		jQuery.ajax({
			url:'delete.php',
			type:'post',
			data:"id="+id,
			success:function(result){
				jQuery('#box'+id).hide();
			}
		});
	}
}
</script>