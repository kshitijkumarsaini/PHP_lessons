<?php
$gender="";
$education="";
$name="";
$about="";
$city="";
$getEducationArr=[];
if(isset($_POST['submit'])){
	//echo "<pre>";
	//print_r($_POST);
	$name=$_POST['name'];
	$city=$_POST['city'];
	$about=$_POST['about'];
	if(isset($_POST['gender'])){
		$gender=$_POST['gender'];
	}
	if(isset($_POST['education'])){
		$getEducationArr=$_POST['education'];
		$education=implode(", ",$getEducationArr);
	}
	echo "Name:".$name."<br/>";
	echo "City:".$city."<br/>";
	echo "About:".$about."<br/>";
	echo "Gender:".$gender."<br/>";
	echo "Education:".$education."<br/>";
}
$arrCity=["Delhi","Noida","Pune"];
$arrGender=["Male","Female"];

//checked="checked"
?>
<form method="post">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="<?php echo $name?>"/></td>
		</tr>
		<tr>
			<td>City</td>
			<td>
				<select name="city">
					<option value="">Select City</option>
					<?php
					foreach($arrCity as $list){
						$is_selected="";
						if($list==$city){
							$is_selected="selected";
						}
						echo "<option $is_selected>$list</option>";
					}
					?>
					
				</select>
			</td>
		</tr>
		<tr>
			<td>About</td>
			<td>
				<textarea name="about"><?php echo $about?></textarea>
			</td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>
			<?php 
			foreach($arrGender as $list){
				$checked="";
				if($list==$gender){
					$checked="checked='checked'";
				}
				echo "$list <input type='radio' name='gender' value='$list' $checked/>";	
			}
			?>
			</td>
		</tr>
		<tr>
			<td>Education</td>
			<td>
			<?php 
			$arrEducation=["10th","12th","BSc"];
			foreach($arrEducation as $list){
				$checked="";
				if(in_array($list,$getEducationArr)){
					$checked="checked='checked'";
				}
				echo "$list <input type='checkbox' name='education[]' value='$list' $checked/>";
			}
			?>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="submit"/>
			</td>
		</tr>
	</table>
</form>