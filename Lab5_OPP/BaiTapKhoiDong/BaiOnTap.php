<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Thanh toán tiền điện</title>
    <style type="text/css">
		fieldset.a{
			height: 300px;
			text-align: justify;
			width: 500px;
			border: 1px solid #000;
		}
		fieldset.b{
			height: 45px;
			text-align: justify;
			width: 250px;
			border: 1px solid #000;
		}
    </style>
	<script>
	$('input[name="nguoi"]').click(function(e) {
	  if(e.target.value === 'Giảng viên') {
		$('#choose').show();
	  } else {
		$('#choose').hide();
	  }
	})
	$('#choose').hide();
	</script>
</head>
<body>
<?php

	
	$hoten= "";
	$diachi= "";
	class Nguoi{
		protected $hoten;
		protected $diachi;
		protected $gioitinh;
		
		public function set_hoten($hoten){
			return $this->hoten = $hoten;
		}
		public function set_diachi($diachi){
			return $this->diachi = $diachi;
		}
		public function set_gioitinh($gioitinh){
			return $this->gioitinh = $gioitinh;
		}
		public function get_hoten(){
			return $this->hoten;
		}
		public function get_diachi(){
			return $this->diachi;
		}
		public function get_gioitinh(){
			return $this->gioitinh == GioiTinh;

		}
	}
	class SINH_VIEN extends NGUOI{
		private $lophoc;
		private $nganhhoc;
		
		function set_lophoc($lophoc){
			return $this->lophoc = $lophoc;
		}
		function set_nganhhoc($nganhhoc){
			return $this->nganhhoc = $nganhhoc;
		}
		function get_lophoc(){
			return $this->lophoc;
		}
		function get_nganhhoc(){
			return $this->nganhhoc;
		}
	}
	class GIANG_VIEN extends NGUOI{
		private $trinhdo;
		const luongcoban = 1500000;
		
		function set_trinhdo($trinhdo){
			return $this->trinhdo = $trinhdo;
		}
		function set_luongcoban($luongcoban){
			return $this->luongcoban = $luongcoban;
		}
		function get_trinhdo(){
			if($this->trinhdo == "Cử nhân")
				return $this->$trinhdo;
			else if($this->trinhdo == "Thạc sĩ")
				return $this->$trinhdo;
			else
				return $this->$trinhdo;
		}
		function get_luongcoban(){
			if($this->trinhdo == "Cử nhân")
				return self :: luongcoban*2.34;
			else if($this->trinhdo == "Thạc sĩ")
				return self :: luongcoban*3.67;
			else
				return self :: luongcoban*5.66;
		}
	}

?>
<fieldset class="a">
  <legend><b>THÔNG TIN GIẢNG VIÊN SINH VIÊN</b></legend>
	<form method="post">
		<table>
			<fieldset class="b">
				  <legend>Chọn đối tượng</legend>
				  	<input type="radio" id="GiangVien" name="nguoi" value="Giảng viên" onclick="chon()">
				  	<label for="GiangVien">Giảng viên</label>
					<input type="radio" id="SinhVien" name="nguoi" value="Sinh viên" onclick="chon()">
				  	<label for="SinhVien">Sinh viên</label>
			</fieldset>
			<tr>
				<td>Họ tên:</td>
				<td><input type="text" id="hoten" name="hoten" size="50" value="<?php  echo $hoten;?>"></td>
			</tr>
			<tr>
				<td>Giới tính:</td>
				<td>
					<input type="radio" id="Nam" name="GioiTinh" value="Nam">
				  	<label for="Nam">Nam</label>
					<input type="radio" id="Nu" name="GioiTinh" value="Nữ">
				  	<label for="Nu">Nữ</label>
				</td>
			</tr>
			<tr>
				<td>Địa chỉ:</td>
				<td><input type="text" id="diachi" name="diachi" size="50" value="<?php  echo $diachi;?>"></td>
			</tr>
			<tr>
				<td id="choose">Trình độ:</td>
				<td>
					<select name="trinhdo" id="trinhdo" required>
						<option value="Cử Nhân">Cử nhân</option>
						<option value="Thạc sĩ">Thạc sĩ</option>
						<option value="Tiến sĩ">Tiến sĩ</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input autocomplete="off" type="submit" value="Hiển thị thông tin" name="hienthi" />
				</td>
			</tr>
		</table>
	</form>
</fieldset>
</body>
</html>