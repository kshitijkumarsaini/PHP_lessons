<?php
include('db.php');
$id=$_GET['id'];


$row=mysqli_fetch_assoc(mysqli_query($con,"select * from temp_user where id='$id'"));


if(isset($_GET['type']) && $_GET['type']=='approve'){
	
}



echo "<pre>";
print_r($row);
?>

<a href="?type=approve&id=<?php echo $id?>">Approve</a>
