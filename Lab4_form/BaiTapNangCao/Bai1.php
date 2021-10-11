<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Xử lý n</title>
</head>
<body>
<?php
	if(isset($_POST['n'])) $n=$_POST['n'];
	else $n=0;
	
	$ketqua="";
	if(isset($_POST['hthi'])) 
	{	//Hiển thị mảng phát sinh ngẫu nhiên có độ dài n.
		$arr=array();
		for($i=0;$i<$n;$i++)
		{
			$x=rand(-200,200);
			$arr[$i]=$x;
		}
		//In ra mảng vừa tạo
		$ketqua="Mảng được tạo là:" .implode(" ",$arr)."&#13;&#10;";

		//b) Sắp xếp mảng tăng dần theo giá trị.
		sort($arr);
		foreach( $arr as $n) {
			$arr;
		}
		$ketqua .="Thứ tự của mảng là: ".implode(" ",$arr). "&#13;&#10;";
		//c) chèn 1 số vào mảng
		if(isset($_POST['vitri']) && isset($_POST['a']))
		{
			$a = $_POST['a'];
			$vitri = $_POST['vitri'];
			array_splice( $arr, $vitri, 0, $a );  
			foreach ($arr as $n)
			{
				$arr;
			}  
			$ketqua .="Mảng sau khi chèn là: ".implode(" ",$arr). "&#13;&#10;";
		}
		
		//d) Sắp xếp mảng theo dạng sau: Từ phần tử đầu tiên đến phần tử được chèn vào là tăng dần; từ phần tử được chèn vào đến phần tử cuối là giảm dần.
		
	}
?>
<form action="" method="post">
	Nhập n: <input type="text" name="n" value="<?php echo $n?>"/>
	<input type="submit" name="hthi" value="Hiển thị"/><br>
	Nhập số cần chèn: <input type="text" name="a" value="<?php echo $a?>"/><br>
	Nhập vị trí cần chèn: <input type="text" name="vitri" value="<?php echo $vitri?>"/><br>
	Kết quả: <br>
	<textarea cols="70" rows="10" name="ketqua"> <?php echo $ketqua?></textarea>
</form>
</body>
</html>