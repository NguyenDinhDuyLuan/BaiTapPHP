<?php 
	$n = mt_rand (10, 1000);
	echo ("Số nguyên ngẫu nhiên là: $n <br><br/>");
	
	function isPrimeNumber($n) {
		// so nguyen n < 2 khong phai la so nguyen to
    if ($n < 2) {
        return false;
    }
    // check so nguyen to khi n >= 2
    $squareRoot = sqrt($n);
    for ($i = 2; $i <= $squareRoot; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
	}
	
	echo ("<b>Câu a:</b>Tất cả các số nguyên tố nhỏ hơn $n là: <br>");
	for ($i = 1; $i < $n; $i++) {
		if (isPrimeNumber($i)) {
			echo (" " . $i);
		}
	}
	$dem = 0;
	while($n >= 10){
		$n = $n / 10;
		$dem++;
	}
	$dem = $dem + 1;
	echo ("<br><b>Câu b:</b>Số lượng chữ số của số nguyên là: $dem ");
	
	$temp = $n;
	$temp = strval($temp);
	$max = 0;
	for($i = 0;$i<strlen($temp);$i++)
	{
		if($temp[$i] > $max)
		{
			$max = $temp[$i];
		}
	}
	echo "<br><b>Câu c:</b>Chữ số lớn nhất của số nguyên là: $max";
?>