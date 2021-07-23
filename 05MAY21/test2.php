<?php
$arr=["Vishal","Amit","Sumit","Namit","Jatin","Lalit"];
?>
<table>
	<tr>
		<?php
		$i=0;
		foreach($arr as $list){
			if($i%2==0 && $i>0){
				echo "</tr><tr>";
			}
			echo "<td>$list</td>";	
			$i++;
		}
		?>
	</tr>
</table>