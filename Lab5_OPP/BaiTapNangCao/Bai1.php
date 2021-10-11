<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Tinh chu vi va dien tich</title>
    <style type="text/css">
		fieldset {
			height: 200px;
			text-align: justify;
			width: 800px;
			border: 1px solid #000;
		}
    </style>
</head>
<body>
<?php
	abstract class Hinh{
		protected $ten, $do_dai;
		public function setTen($ten){
			$this->ten=$ten;
		}
		public function setDodai($do_dai){
			if(is_numeric($do_dai))
				$this->dodai=$do_dai;
			else
				{
					$dodai = explode(",",$do_dai);
					$this->dodai[0] = $dodai[0];
					$this->dodai[1] = $dodai[1];
					if(isset($do_dai[2]))
					$this->dodai[2] = $dodai[2];
				}
		}
		public function getTen(){
			return $this->ten;
		}
		public function getDodai(){
			return $this->dodai;
		}
		abstract public function tinh_CV();
		abstract public function tinh_DT();
	}
	class HinhTron extends Hinh{
		const PI=3.14;
		function tinh_CV(){
			return $this->dodai*2*self::PI;
		}
		function tinh_DT(){
			return pow($this->dodai,2)*self::PI;
		}
	}
	class HinhVuong extends Hinh{
		public function tinh_CV(){
			return $this->dodai[0]*4;
		}
		public function tinh_DT(){
			return pow($this->dodai[0],2);
		}
	}
	class TamGiacDeu extends Hinh{
		public function tinh_CV(){
			return $this->dodai[0]*3;
		}
		public function tinh_DT(){
			return pow($this->dodai[0],2)*(sqrt(3)/4);
		}
	}
	class TamGiacThuong extends Hinh{
		public function tinh_CV(){
			$dodai = $this->dodai;
			if(($dodai[0]+$dodai[1]>$dodai[2])&&($dodai[1]+$dodai[2]>$dodai[0])&&($dodai[0]+$dodai[2]>$dodai[1]))
				return $this->dodai[0]+$this->dodai[1]+$this->dodai[2];
			else
				return "Đây không phải là tam giác";
		}
		public function tinh_DT(){
			$dodai = $this->dodai;
			if(($dodai[0]+$dodai[1]>$dodai[2])&&($dodai[1]+$dodai[2]>$dodai[0])&&($dodai[0]+$dodai[2]>$dodai[1]))
			{
				$p = ($this->dodai[0]+$this->dodai[1]+$this->dodai[2])/2;
				return sqrt($p*($p-$this->dodai[0])*($p-$this->dodai[1])*($p-$this->dodai[2]));
			}
			else 
				return "Đây không phải là tam giác";
		}
	}
	class HinhChuNhat extends Hinh{
		public function tinh_CV(){
			return ($this->dodai[0]+$this->dodai[1])/2;
		}
		public function tinh_DT(){
			return $this->dodai[0]*$this->dodai[1];
		}
	}
	$str = NULL;
	if(isset($_POST['tinh'])){
		if(isset($_POST['hinh']) && ($_POST['hinh'])=="hv"){
			$hv=new HinhVuong();
			$hv->setTen($_POST['ten']);
			$hv->setDodai($_POST['do_dai']);
			$str= "Diện tích hình vuông ".$hv->getTen()." là : ".$hv->tinh_DT()." \n".
					"Chu vi của hình vuông ".$hv->getTen()." là : ".$hv->tinh_CV();
		}
		if(isset($_POST['hinh']) && ($_POST['hinh'])=="ht"){
			$ht=new HinhTron();
			$ht->setTen($_POST['ten']);
			$ht->setDodai($_POST['do_dai']);
			$str= "Diện tích của hình tròn ".$ht->getTen()." là : ".$ht->tinh_DT()." \n".
					"Chu vi của hình tròn ".$ht->getTen()." là : ".$ht->tinh_CV();
		}
		if(isset($_POST['hinh']) && ($_POST['hinh'])=="tgd"){
			$tgd=new TamGiacDeu();
			$tgd->setTen($_POST['ten']);
			$tgd->setDodai($_POST['do_dai']);
			$str= "Diện tích của tam giác đều ".$tgd->getTen()." là : ".$tgd->tinh_DT()." \n".
					"Chu vi của tam giác đều ".$tgd->getTen()." là : ".$tgd->tinh_CV();
		}
		if(isset($_POST['hinh']) && ($_POST['hinh'])=="tgt"){
			$tgt=new TamGiacThuong();
			$tgt->setTen($_POST['ten']);
			$tgt->setDodai($_POST['do_dai']);
			$str= "Diện tích của tam giác thường ".$tgt->getTen()." là : ".$tgt->tinh_DT()." \n".
					"Chu vi của tam giác thường ".$tgt->getTen()." là : ".$tgt->tinh_CV();
		}
		if(isset($_POST['hinh']) && ($_POST['hinh'])=="hcn"){
			$hcn=new HinhChuNhat();
			$hcn->setTen($_POST['ten']);
			$hcn->setDodai($_POST['do_dai']);
			$str= "Diện tích của hình chữ nhật ".$hcn->getTen()." là : ".$hcn->tinh_DT()." \n".
					"Chu vi của hình chữ nhật ".$hcn->getTen()." là : ".$hcn->tinh_CV();
		}
	}
?>
<fieldset>
  <legend><b>Tính chu vi diện tích các hình đơn giản</b></legend>
	<form method="post">
		<table>
			<tr>
				<td>Chọn hình:</td>
				<td>
					<input type="radio" name="hinh" value="hv" <?php if(isset($_POST['hinh'])&&($_POST['hinh'])=="hv") echo 'checked'?>>Hình vuông
					<input type="radio" name="hinh" value="ht" <?php if(isset($_POST['hinh'])&&($_POST['hinh'])=="ht") echo 'checked'?>>Hình tròn
					<input type="radio" name="hinh" value="tgd" <?php if(isset($_POST['hinh'])&&($_POST['hinh'])=="tgd") echo 'checked'?>>Hình tam giác đều
					<input type="radio" name="hinh" value="tgt" <?php if(isset($_POST['hinh'])&&($_POST['hinh'])=="tgt") echo 'checked'?>>Hình tam giác thường
					<input type="radio" name="hinh" value="hcn" <?php if(isset($_POST['hinh'])&&($_POST['hinh'])=="hcn") echo 'checked'?>>Hình chữ nhật
				</td>
			</tr>
			<tr>
				<td>Nhập tên:</td>
				<td><input type="text" name="ten" size="25" value="<?php if(isset($_POST['ten'])) echo $_POST['ten'];?>"></td>
			</tr>
			<tr>
				<td>Nhập độ dài:</td>
				<td><input type="text" name="do_dai" size="25" value="<?php  if(isset($_POST['do_dai'])) echo $_POST['do_dai'];?>"></td>
			</tr>
			<tr>
				<td>Kết quả:</td>
				<td><textarea disabled="disabled" rows="5" cols="80" name="ketqua"><?php echo $str;?></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input autocomplete="off" type="submit" value="Tính" name="tinh" />
				</td>
			</tr>
		</table>
	</form>
</fieldset>
</body>
</html>