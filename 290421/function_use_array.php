<?php
function getCityDropDown(){
	$arrCity=["Delhi","Pune","Agra","Mumbai"];
	rsort($arrCity);
	$dynamicData="";
	foreach($arrCity as $list){
		$dynamicData=$dynamicData."<option>$list</option>";
	}
	$html="<select><option>Select City</option>$dynamicData</select>";
	return $html;
}
echo getCityDropDown();
?>