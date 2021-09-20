<table border="1px">
<tr>
<?php
	$row = rand(2,5);
	$column = rand(2,5);
	for($i = 0; $i <= $row; $i++){
		echo "<td>";
		for($j = 0; $j <= $column; $j ++) {
			echo $value = rand(-100,100);
			echo "<br>";
		}
		echo "</td>";
	}
?>
</tr>
</table>