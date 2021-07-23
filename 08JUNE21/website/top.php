<?php
$cur_url=$_SERVER['SCRIPT_NAME'];
$cur_url_arr=explode("/",$cur_url);
$cur_url=$cur_url_arr[count($cur_url_arr)-1];
$cur_url_arr=explode(".",$cur_url);
$url=$cur_url_arr[0];
$title=ucwords(str_replace("_"," ",$cur_url_arr[0]));
$pageTitleArr=["Index"=>"Home","About"=>"About My"];
if(isset($pageTitleArr[$title])){
	$title=$pageTitleArr[$title];
}
?>
<html>
	<head>
		<title>PHP Class - <?php echo $title?></title>
		<style>
		a{
			text-decoration:none;
		}
		.active{
			text-decoration:underline;
		}
		</style>
	</head>
	<body>
	<a href="index.php" class="<?php echo ($url=="index")?"active":""?>">Home</a>&nbsp;
	<a href="about.php" class="<?php echo ($url=="about")?"active":""?>">About</a>&nbsp;
	<a href="services.php" class="<?php echo ($url=="services")?"active":""?>">Services</a>&nbsp;
	<a href="online-php_classes.php" class="<?php echo ($url=="/online-php_classes")?"active":""?>">Online PHP Classes</a>&nbsp;
	