<?php
$gender="";
$education="";
$name="";
$about="";
$city="";
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
		$education=$_POST['education'];
		$education=implode(", ",$education);
	}
	echo "Name:".$name."<br/>";
	echo "City:".$city."<br/>";
	echo "About:".$about."<br/>";
	echo "Gender:".$gender."<br/>";
	echo "Education:".$education."<br/>";
}
$arrCity=["Delhi","Noida","Pune"];
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
			Male <input type="radio" name="gender" value="Male"/>
			Female <input type="radio" name="gender" value="Female"/>
			</td>
		</tr>
		<tr>
			<td>Education</td>
			<td>
			10th <input type="checkbox" name="education[]" value="10th"/>
			12th <input type="checkbox" name="education[]" value="12th"/>
			BSc <input type="checkbox" name="education[]" value="BSc"/>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="submit"/>
			</td>
		</tr>
	</table>
</form>