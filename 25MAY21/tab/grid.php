<?php
$con=mysqli_connect('localhost','root','','260421');
$res=mysqli_query($con,"select * from pages");
?>
<table border="1"> 
	<tr>
		<td>Title</td>
		<td>Desc</td>
		<td>Action</td>
	</tr>	
	<?php while($row=mysqli_fetch_assoc($res)){?>
	<tr>
		<td><?php echo $row['title']?></td>
		<td><?php echo $row['desc']?></td>
		<td id="status<?php echo $row['id']?>">
		<?php
		if($row['status']==1){
			echo "<a href='javascript:void(0)' onclick=update_status('".$row['id']."','0')>Active</a>";
		}else{
			echo "<a href='javascript:void(0)' onclick=update_status('".$row['id']."','1')>Deactive</a>";
		}
		?>
		</td>
	</tr>	
	<?php 
	}
	?>
</table>
<script src="jquery-3.6.0.min.js"></script>
<script>
function update_status(id,type){
	jQuery.ajax({
		url:'status.php',
		type:'post',
		data:'id='+id+'&type='+type,
		success:function(result){
			if(type==1){
				jQuery('#status'+id).html("<a href='javascript:void(0)' onclick=update_status('"+id+"','0')>Active</a>");
			}else{
				jQuery('#status'+id).html("<a href='javascript:void(0)' onclick=update_status('"+id+"','1')>Deactive</a>");
			}
		}
	});
}
</script>