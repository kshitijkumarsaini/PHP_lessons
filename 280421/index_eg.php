<?php
$arrCity=["Delhi","Pune","Agra","Mumbai"];
rsort($arrCity);
?>
<select>
	<option>Select City</option>
	<?php 
	foreach($arrCity as $city){
		echo "<option>$city</option>";
	}
	?>
</select>