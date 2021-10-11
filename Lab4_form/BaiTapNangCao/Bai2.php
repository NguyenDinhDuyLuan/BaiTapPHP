<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>BaiTap2 Mảng</title>
    <style type="text/css">
        table{
            background: #ffd94d;
            border: 10px solid purple;
        }
        thead{
            background: #fff14d;    
        }
        h3{
            font-family: verdana;
            text-align: center;
            /* text-anchor: middle; */
            color: #ff8100;
            font-size: medium;
        }
    </style>
</head>
<body>
<?php 
	$tong = "";
	$nhapdayso = "";
	if(isset($_POST['nhap'])) $nhapdayso = $_POST['nhap'];
	trim($nhapdayso," ");
	$str = explode(",", $nhapdayso);
	$tong = 0;
	if(isset($_POST['tinh']))
	{
		foreach ($str as $value)
		$tong += $value;
	}
?>
<form align='center' action="" method="post">
<table>
    <thead>
        <th colspan="3" align="center"><h3>NHẬP VÀ TÍNH TRÊN DÃY SỐ</h3></th>
    </thead>
    <tr><td>Nhập dãy số:</td>
     <td><input type="text" name="nhap" value="<?php  echo $nhapdayso;?> "/></td>
	 <td style="color: red;">(*)</td>
    </tr>
	<tr>
     <td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td>
    </tr>
    <tr><td>Tổng dãy số:</td>
     <td><input type="text" name="tong" disabled="disabled" value="<?php  echo $tong;?> "/></td>
    </tr>
	<tr> 
		<td style="color: red;">(*)</td>
		<td>Các số được nhập cách nhau bằng dấu phẩy ","</td>
	</tr>
</table>
</form>
</body>
</html>