<?php
$con=mysqli_connect('localhost','root','','260421');
$res=mysqli_query($con,"select * from pages where status='1'");
$arr=[];
while($row=mysqli_fetch_assoc($res)){
	$arr[]=$row;
}
?>
<table>
	<tr>
		<?php 
		foreach($arr as $key=>$list){
			$class="deactive";
			if($key==0){
				$class="";
			}
			?>
			<td><a href="javascript:void(0)" onclick="tabs('<?php echo $list['id']?>')" class="tabs_link <?php echo $class?>" id="<?php echo $list['id']?>_link"><?php echo $list['title']?></a></td>
		<?php } ?>
	</tr>
	
	<tr>
		<td colspan="3" id="tab_box">
			<?php echo $arr['0']['desc']?>
		</td>
	</tr>
</table>

<script src="jquery-3.6.0.min.js"></script>

<script>
function tabs(id){
	jQuery.ajax({
		url:'load.php',
		type:'post',
		data:'id='+id,
		success:function(result){
			jQuery('.tabs_link').css('text-decoration','none');
			jQuery('#'+id+'_link').css('text-decoration','underline');	
			jQuery('#tab_box').html(result);
		}
	});
}
</script>
<style>
.deactive{text-decoration:none;}
</style>