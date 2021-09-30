<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Thanh toán tiền điện</title>
</head>
<body>
<?php
$ho_ten = isset($_POST['name']) ? $_POST['name']:null;
$dia_chi = isset($_POST['diachi']) ? $_POST['diachi']:null;
$so_dien_thoai = isset($_POST['SDT']) ? $_POST['SDT']:null;
$ghi_chu = isset($_POST['ghichu']) ? $_POST['ghichu']:null;
$gender = isset($_POST['gender']) ? $_POST['gender']:null;
$value = isset($_POST['monhoc']) ? $_POST['monhoc']:null;
$quoctich123 = $_POST['quoctich'];
?>
<form align='center' action="NhapThongTin.php" method="post">
<table>
    <thead>
        <th colspan="3" align="center"><h3>Bạn đã đăng nhập thành công,dưới đây là những thông tin bạn nhập</h3></th>
    </thead>
		<tr>
			<td>Họ tên:</td>
			<td><?php  echo $ho_ten;?></td>
		</tr>
		<tr>
			<td>Địa chỉ:</td>
			<td><?php  echo $dia_chi;?></td>
		</tr>
		<tr>
			<td>Số điện thoại:</td>
			<td><?php  echo $so_dien_thoai;?></td>
		</tr>
		<tr>
			<td>Giới tính:</td>
			<td><?php echo "$gender";?></td>
		</tr>
		<tr>
			<td>Quốc tịch:</td>
			<td>
				<?php echo $quoctich123; ?>
			</td>
		</tr>
		<tr>
			<td>Các môn đã học:</td>
			<td>
				<?php
					if(!empty($_POST['monhoc'])) {    
						foreach($_POST['monhoc'] as $value){
							echo $value.",";
						}
					}
				?>
			</td>
		</tr>
		<tr>
			<td>Ghi chú:</td>
			<td><?php  echo $ghi_chu;?></td>
		</tr>
		<tr>
			<td colspan="2" align="left"><a href="#" onclick="history.go(-1)">Trở lại trang trước</a></td>
		</tr>
</table>
</form>
</body>
</html>