<table border="1px">
<tr>
<?php
$n = mt_rand(1,10);
echo ("Số nguyên ngẫu nhiên là: $n <br><br/>");
echo ("Bảng cửu chương:<br>");

for($i = $n; $i <= $n; $i ++) {
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