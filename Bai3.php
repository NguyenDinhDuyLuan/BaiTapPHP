<table border="1px">
<tr>
<?php
echo ("Bảng cửu chương:<br>");
for($i = 1; $i <= 10; $i ++) {
    echo "<td>";
    for($j = 1; $j <= 10; $j ++) {
        echo "<b style ='color:red;'>$i</b> x $j = " . ($i * $j);
        echo "<br>";
    }
    echo "</td>";
}
?>
</tr>
</table>