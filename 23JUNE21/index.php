<?php
$con=mysqli_connect('localhost','root','','260421');
$res=mysqli_query($con,"select * from population");
$data="";
while($row=mysqli_fetch_assoc($res)){
	$data.="['".$row['country']."',".$row['population']."],";
}
$data=rtrim($data,",");
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
	var data = google.visualization.arrayToDataTable([
	  ['Country', 'Population'],
	  <?php echo $data?>
	]);
	var options = {title: 'Population Chart'};
	var chart = new google.visualization.PieChart(document.getElementById('piechart'));
	chart.draw(data, options);
  }
</script>
<div id="piechart" style="width: 900px; height: 500px;"></div>