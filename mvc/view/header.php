<html>
	<head>
		<title><?php echo $arrData['title']?></title>
	</head>
	<body>
	<?php
	$topNav=topNav();
	foreach($topNav as $list){
		echo "<a href='?f=page&id=".$list['id']."'>".$list['title']."</a>&nbsp;&nbsp;";
	}
	?>