<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Thanh toán tiền điện</title>
    <style type="text/css">

        table{
            background: #ffff99;
            border: 10px solid black;
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
            color: #996600;
            font-size: medium;
        }
    </style>
</head>
<body>
<?php
if(isset($_POST['tenchuho'])) 
    $ten_chu_ho=trim($_POST['tenchuho']); 
else $ten_chu_ho='None';
if(isset($_POST['chisocu'])) 
    $chi_so_cu=trim($_POST['chisocu']); 
else $chi_so_cu=0;
if(isset($_POST['chisomoi'])) 
    $chi_so_moi=trim($_POST['chisomoi']); 
else $chi_so_moi=0;
if(isset($_POST['dongia'])) 
    $don_gia=trim($_POST['dongia']); 
else $don_gia=0;
if(isset($_POST['tinh']))
        if (is_numeric($chi_so_cu) && is_numeric($chi_so_moi) && is_numeric($don_gia))
		{
            $so_tien_thanh_toan = ($chi_so_moi - $chi_so_cu) * $don_gia;
		}
        else {
                echo "<font color='red'>Vui lòng nhập vào số! </font>"; 
                $so_tien_thanh_toan="";
            }
else $so_tien_thanh_toan=0;
?>
<form align='center' action="" method="post">
<table>
    <thead>
        <th colspan="3" align="center"><h3>THANH TOÁN TIỀN ĐIỆN</h3></th>
    </thead>
    <tr><td>Tên chủ hộ:</td>
     <td><input type="text" name="tenchuho" value="<?php  echo $ten_chu_ho;?> "/></td>
    </tr>
	<tr><td>Chỉ số cũ:</td>
		<td><input type="text" name="chisocu" value="<?php  echo $chi_so_cu;?> "/></td>
		<td>(Kw)</td>
    </tr>
	<tr><td>Chỉ số mới:</td>
		<td><input type="text" name="chisomoi" value="<?php  echo $chi_so_moi;?> "/></td>
		<td>(Kw)</td>
    </tr>
	<tr><td>Đơn giá:</td>
		<td><input type="text" name="dongia" value="<?php  echo $don_gia;?> "/></td>
		<td>(VNĐ)</td>
    </tr>
    <tr><td>Số tiền thanh toán:</td>
		<td><input type="text" name="sotienthanhtoan" disabled="disabled" value="<?php  echo $so_tien_thanh_toan;?> "/></td>
		<td>(VNĐ)</td>
    </tr>
    <tr>
     <td colspan="2" align="center"><input autocomplete="off" type="submit" value="Tính" name="tinh" /></td>
    </tr>
</table>
</form>
</body>
</html>