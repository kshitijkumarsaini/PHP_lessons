<?php
function getCityDropDown(){
	$arrCity=["Delhi","Pune","Agra","Mumbai"];
	rsort($arrCity);
	$html="<select>";
	$html.="<option>Select City</option>";
	foreach($arrCity as $list){
		$html.="<option>$list</option>";
	}
	$html.="</select>";
	return $html;
}
echo getCityDropDown();
?>