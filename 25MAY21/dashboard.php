<?php
require('include/header.php');
showSessionFlash();
if(isset($_GET['type']) && $_GET['type']=='delete' && isset($_GET['id']) && $_GET['id']>0){
	$id=getSafeValue($_GET['id']);
	//mysqli_query($con,"delete from student where id='$id'");
	setSessionFlash("Data deleted");
	redirect('dashboard.php');
}

$where_condition='';
$str='';
if(isset($_GET['submit'])){
	$str=getSafeValue($_GET['str']);
	$where_condition=" where name like '%$str%' or city like '%$str%' or marks like '%$str%'";
}

$total_record=mysqli_num_rows(mysqli_query($con,"select * from student $where_condition"));
$per_page=3;
$pagi_count=ceil($total_record/$per_page);

$pagi=1;
if(isset($_GET['pagi']) && $_GET['pagi']>0){
	$pagi=getSafeValue($_GET['pagi']);
	/*if($pagi>$pagi_count){
		$pagi=$pagi_count;
	}*/
}

$start=($pagi*$per_page)-$per_page;

$res=mysqli_query($con,"select * from student $where_condition order by added_on desc limit $start,$per_page");


?>
<a href="form.php">Add Data</a>
<br/><br/>

<form method="get">
	<input type="text" name="str" required value="<?php echo $str?>"/>
	<input type="submit" name="submit" value="Search"/>
	<a href="dashboard.php">Clear</a>
</form>

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
<br/>
<div id="pagi">
<?php
if($pagi!=1){
	echo "<a href='?pagi=1'>First</a>&nbsp;&nbsp;";
	$prev=$pagi-1;
	echo "<a href='?pagi=$prev'>Prev</a>&nbsp;&nbsp;";
}



for($i=1;$i<=$pagi_count;$i++){
	$class="";
	if($pagi==$i){
		$class="active";
	}
	echo "<a href='?pagi=$i' class='$class'>$i</a>&nbsp;&nbsp;";
}

if($pagi!=$pagi_count){
	$next=$pagi+1;
	echo "<a href='?pagi=$next'>Next</a>&nbsp;&nbsp;";
	echo "<a href='?pagi=$pagi_count'>Last</a>&nbsp;&nbsp;";
}

?>
</div>

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

<style>
#pagi a{
	text-decoration:none;
}
#pagi .active{
	text-decoration:underline;
}
</style>