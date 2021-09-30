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
        h3{
            font-family: verdana;
            text-align: center;
            /* text-anchor: middle; */
            color: #66ccff;
            font-size: medium;
        }
		label{
			color: red;
		}
    </style>
</head>
<body>
<?php
if(isset($_POST['sothunhat'])) 
    $so_thu_nhat=trim($_POST['sothunhat']); 
else $so_thu_nhat=0;
if(isset($_POST['sothunhi'])) 
    $so_thu_nhi=trim($_POST['sothunhi']); 
else $so_thu_nhi=0;
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
	}
	else
	{
        echo "<h3><font color='red'>Vui lòng nhập vào số! </font></h3>"; 
    }
}
?>
<form align='center' action="ketquapheptinh.php" method="post">
<table>
    <thead>
        <th colspan="3" align="center"><h3>PHÉP TÍNH TRÊN HAI SỐ</h3></th>
    </thead>
    <tr>
		<td style ='color: brown;'><b>Chọn phép tính:</b></td>
		<td>
			<input type="radio" id="cong" name="choose" value="Cộng">
  			<label for="cong">Cộng</label>
			<input type="radio" id="tru" name="choose" value="Trừ">
  			<label for="tru">Trừ</label>
			<input type="radio" id="nhan" name="choose" value="Nhân">
  			<label for="=nhan">Nhân</label>
			<input type="radio" id="chia" name="choose" value="Chia">
  			<label for="chia">Chia</label>
		</td>
	</tr>
	<tr>
		<td><b style ='color: blue;'>Số thứ nhất:</b></td>
		<td><input type="text" name="sothunhat" value="<?php  echo $so_thu_nhat;?>"/></td>
    </tr>
	<tr>
		<td><b style ='color: blue;'>Số thứ hai:</b></td>
		<td><input type="text" name="sothunhi" value="<?php  echo $so_thu_nhi;?> "/></td>
    </tr>
    <tr>
     <td colspan="2" align="center"><input autocomplete="off" type="submit" value="Tính" name="tinh" /></td>
    </tr>
</table>
</form>
</body>
</html>