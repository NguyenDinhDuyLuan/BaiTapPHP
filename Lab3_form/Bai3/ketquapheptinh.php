<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Thanh toán tiền điện</title>
    <style type="text/css">
        table{
            background: white;
            border: 10px solid black;
			margin-left: auto;
			margin-right: auto;
        }
        thead{
            background: #fff14d;
        }
        td {
            color: black;
        }
        h3{
            font-family: verdana;
            text-align: center;
            /* text-anchor: middle; */
            color: #66ccff;
            font-size: medium;
        }
    </style>
</head>
<body>
<?php
$choose = isset($_POST['choose']) ? $_POST['choose']:null;
$so_thu_nhat = isset($_POST['sothunhat']) ? $_POST['sothunhat']:null;
$so_thu_nhi = isset($_POST['sothunhi']) ? $_POST['sothunhi']:null;
if(isset($_POST['tinh']))
{
    if (is_numeric($so_thu_nhat) && is_numeric($so_thu_nhi))
	{
		if($_POST['choose'] == 'Cộng')
		{
            $ket_qua = $so_thu_nhat + $so_thu_nhi;
		}
        else if($_POST['choose'] == 'Trừ')
		{
            $ket_qua = $so_thu_nhat - $so_thu_nhi;
		}
		else if($_POST['choose'] == 'Nhân')
		{
            $ket_qua = $so_thu_nhat * $so_thu_nhi;
		}
		else if($_POST['choose'] == 'Chia')
		{
            $ket_qua = $so_thu_nhat / $so_thu_nhi;
		}
		else 
		{
			echo "<h3><font color='red'>Vui lòng chọn phép tính! </font></h3>";
		}
	}
	else
	{
        echo "<h3><font color='red'>Vui lòng nhập vào số! </font></h3>"; 
    }
}
?>
<form align='center' action="Bai3NangCao.php" method="post">
<table>
    <thead>
        <th colspan="3" align="center"><h3>PHÉP TÍNH TRÊN HAI SỐ</h3></th>
    </thead>
    <tr>
		<td><b style ='color: brown;'>Chọn phép tính:</b></td>
		<td><b style ='color: red;'><?php echo "$choose";?></b></td>
	</tr>
	<tr>
		<td><b style ='color: blue;'>Số 1:</b></td>
		<td><input type="text" name="sothunhat" value="<?php  echo $so_thu_nhat;?> "/></td>
    </tr>
	<tr>
		<td><b style ='color: blue;'>Số 2:</b></td>
		<td><input type="text" name="sothunhi" value="<?php  echo $so_thu_nhi;?> "/></td>
    </tr>
	<tr>
		<td><b style ='color: blue;'>kết quả:</b></td>
		<td><input type="text" name="ketqua" disabled="disabled" value="<?php  echo $ket_qua;?> "/></td>
    </tr>
    <tr>
     <td colspan="2" align="center"><a href="#" onclick="history.go(-1)">Quay lại trang trước</a></td>
    </tr>
</table>
</form>
</body>
</html>