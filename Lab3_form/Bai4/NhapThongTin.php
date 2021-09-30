<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Thanh toán tiền điện</title>
    <style type="text/css">
		fieldset {
			height: 300px;
			text-align: justify;
			width: 500px;
			border: 1px solid #000;
		}
    </style>
</head>
<body>
<?php


$so_dien_thoai = isset($_POST['SDT']);
$ho_ten = isset($_POST['name']);
$dia_chi = isset($_POST['diachi']);
$ghi_chu = isset($_POST['ghichu']);
if(isset($_POST['gui'])){
    if(!empty($_POST['monhoc'])) {    
        foreach($_POST['monhoc'] as $value){
            echo $value;
        }
    }
}
?>
<fieldset>
  <legend><b>Enter your information</b></legend>
	<form action="xulyThongTin.php" method="post">
		<table>
			<tr>
				<td>Họ tên:</td>
				<td><input type="text" id="name" name="name" size="50" value="<?php  echo $ho_ten;?>"></td>
			</tr>
			<tr>
				<td>Địa chỉ:</td>
				<td><input type="text" id="diachi" name="diachi" size="50" value="<?php  echo $dia_chi;?>"></td>
			</tr>
			<tr>
				<td>Số điện thoại:</td>
				<td><input type="text" id="SDT" name="SDT" size="25" value="<?php  echo $so_dien_thoai;?>"></td>
			</tr>
			<tr>
				<td>Giới tính:</td>
				<td>
					<input type="radio" id="Nam" name="gender" value="Nam">
				  	<label for="Nam">Nam</label>
					<input type="radio" id="Nu" name="gender" value="Nữ">
				  	<label for="Nu">Nữ</label>
				</td>
			</tr>
			<tr>
				<td>Quốc tịch:</td>
				<td>
					<select name="quoctich" id="quoctich" required>
						<option value="Việt Nam">Việt Nam</option>
						<option value="Nhật bản">Nhật Bản</option>
						<option value="Hàn Quốc">Hàn Quốc</option>
						<option value="Trung Quốc">Trung Quốc</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Các môn đã học:</td>
				<td>
				  <input type="checkbox" id="PHP" name="monhoc[]" value="PHP&MySQL">
				  <label for="PHP">PHP&MySQL </label>
				  <input type="checkbox" id="C#" name="monhoc[]" value="C">
				  <label for="C">C#</label>
				  <input type="checkbox" id="XML" name="monhoc[]" value="XML">
				  <label for="XML">XML</label>
				  <input type="checkbox" id="Python" name="monhoc[]" value="Python">
				  <label for="Python">Python</label>
				</td>
			</tr>
			<tr>
				<td>Ghi chú:</td>
				<td><textarea rows="5" cols="45" name="ghichu" wrap="physical" value="<?php  echo $ghi_chu;?>">Nhập ghi chú</textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input autocomplete="off" type="submit" value="Gửi" name="gui" />
					<input type="reset" value="Hủy" name="huy">
				</td>
			</tr>
		</table>
	</form>
</fieldset>
</body>
</html>