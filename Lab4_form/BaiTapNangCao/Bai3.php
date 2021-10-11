<?php 
    session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>BaiTap2 Mảng</title>
    <style type="text/css">
        table{
            border: 2px solid black;
			width: 700px;
			height: 400px;
        }
		.flex-ngang {
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        justify-content: center
		}
		tr , th, td{
			border: 1px solid black;
			text-align: center;
		}
        h3{
            font-family: verdana;
            text-align: center;
            /* text-anchor: middle; */
            color: #ff8100;
            font-size: medium;
        }
		table.center{
		  margin-left: auto; 
		  margin-right: auto;
		}
		.div-g {
        margin-left: 20px;
        margin-right: 20px;
		}
    </style>
</head>
<body>
<?php
    if(isset($_POST['so_ve']))
    {
        $so_ve = $_POST['so_ve'];
        $array = [];
    }
        function kiemtra($ketqua,$giai){
            global $so_ve,$array;
            $array_tam = [$ketqua,$giai];
            if($giai==8)
            {
                $so_ve_tam = substr($so_ve,-2);
            }
            else if($giai==7)
            {
                $so_ve_tam = substr($so_ve,-3);
            }
            else if($giai==6||$giai==5)
            {
                $so_ve_tam = substr($so_ve,-4);
            }
            else if($giai==4||$giai==3||$giai==2)
            {
                $so_ve_tam = substr($so_ve,-5);
                
            }
            else if($giai==1||$giai==0)
            {
                $so_ve_tam = $so_ve;
            }
            if($so_ve_tam==$ketqua)
            {
                array_push($array,$array_tam);
            } 
		}
    function giai($n)
    {
        if($n==8)
            return giai8();
        if($n==7)
            return giai7(); 
        if($n==6)
            return giai6();
        if($n==5)
            return giai5();
        if($n==4)
            return giai4();
        if($n==3)
            return giai3();              
        if($n==2)
            return giai2();
        if($n==1)
            return giai1();
        if($n==0)
            return giaidb();
    }
	
	function giai8(){
		if(!isset($_SESSION['giai8']))
        {
			$ketqua = rand(0,99);
			$ket_qua = sprintf("%02d", $ketqua);
			$_SESSION['giai8']=$ketqua;
			return $ketqua;
		}
        else
        {
            kiemtra($_SESSION['giai8'],8);
            return $_SESSION['giai8'];
        }
	}
	function giai7(){
		if(!isset($_SESSION['giai7']))
        {
			$ketqua = rand(0,999);
			$ket_qua = sprintf("%03d", $ketqua);
			$_SESSION['giai7']=$ketqua;
			return $ketqua;
		}
        else
        {
            kiemtra($_SESSION['giai7'],7);
            return $_SESSION['giai7'];
        }
	}
	function giai6(){
		$a = "";
        if(!isset($_SESSION['giai6']))
        {
            $array_tam = [];
            for($i=0;$i<3;$i++)
            {
                $ketqua = rand(0,9999);
                $ketqua = sprintf("%04d", $ketqua);
                $array_tam[$i] = $ketqua;
                $a.= "<div class='div-g'>".$ketqua ."</div>";
            }
            $_SESSION['giai6']=$array_tam;
            return $a;
        }
        else
        {
            $array_tam=$_SESSION['giai6'];
            foreach($array_tam as $value){
                kiemtra($value,6);
                $a.=  "<div class='div-g'>".$value."</div>";
            }
            return $a;
        }
	}
	function giai5(){
		if(!isset($_SESSION['giai5']))
        {
			$ketqua = rand(0,9999);
			$ket_qua = sprintf("%04d", $ketqua);
			$_SESSION['giai5']=$ketqua;
			return $ketqua;
		}
        else
        {
            kiemtra($_SESSION['giai5'],5);
            return $_SESSION['giai5'];
        }
	}
	function giai4(){
		$a = "";
        if(!isset($_SESSION['giai4']))
        {
            $array_tam = [];
            for($i=0;$i<7;$i++)
            {
                $ketqua = rand(0,99999);
                $ketqua = sprintf("%05d", $ketqua);
                $array_tam[$i] = $ketqua;
                $a .= "<div class='div-g'>".$ketqua."</div>";
            }
            $_SESSION['giai4']=$array_tam;
            return $a;
        }
        else
        {
            $array_tam=$_SESSION['giai4'];
            foreach($array_tam as $value){
                kiemtra($value,4);
                $a.=  "<div class='div-g'>".$value."</div>";
            }
            return $a;
        }
	}
	function giai3(){
		$a = "";
        if(!isset($_SESSION['giai3']))
        {
            $array_tam = [];
            for($i=0;$i<2;$i++)
            {
                $ketqua = rand(0,99999);
                $ketqua = sprintf("%05d", $ketqua);
                $array_tam[$i] = $ketqua;
                $a .= "<div class='div-g'>".$ketqua."</div>";
            }
            $_SESSION['giai3']=$array_tam;
            return $a;
        }
        else
        {
            $array_tam=$_SESSION['giai3'];
            foreach($array_tam as $value){
                kiemtra($value,3);
                $a .= "<div class='div-g'>".$value."</div>";
            }
            return $a;
        }
	}
	function giai2(){
		if(!isset($_SESSION['giai2']))
        {
			$ketqua = rand(0,99999);
			$ket_qua = sprintf("%05d", $ketqua);
			$_SESSION['giai2']=$ketqua;
			return $ketqua;
		}
        else
        {
            kiemtra($_SESSION['giai2'],2);
            return $_SESSION['giai2'];
        }
	}
	function giai1(){
		if(!isset($_SESSION['giai1']))
        {
			$ketqua = rand(0,999999);
			$ket_qua = sprintf("%06d", $ketqua);
			$_SESSION['giai1']=$ketqua;
			return $ketqua;
		}
        else
        {
            kiemtra($_SESSION['giai1'],1);
            return $_SESSION['giai1'];
        }
	}
	function giaidb(){
		if(!isset($_SESSION['giaidb']))
        {
			$ketqua = rand(0,999999);
			$ket_qua = sprintf("%06d", $ketqua);
			$_SESSION['giaidb']=$ketqua;
			return $ketqua;
		}
        else
        {
            kiemtra($_SESSION['giaidb'],0);
            return $_SESSION['giaidb'];
        }
	}
?>
<form align='center' action="Bai3.php" method="post">
    <thead>
		<?php
			date_default_timezone_set("Asia/Ho_Chi_Minh");
			$thoigian = date("d-m-Y");
			echo "<h3 >Kết quả xổ số kiến thiết tỉnh Khánh Hòa ngày $thoigian</h3>";
		?>
    </thead>
	
	<label for="cong">Nhập số đề:</label>
	<input value="<?php if(isset($_POST['so_ve'])) echo $_POST['so_ve']; ?>" type="text" maxlength="6" name="so_ve"  placeholder="Số vé..." required />
    <input type="submit" value="Kiểm tra" name="nhap" />
</form>
  <div align='center' style='margin-top:20px'><a href='unset.php'><span class="btn btn-warning material-icons-outlined">refresh</span></a></div>
	<table class ="center" style='font-weight:bold'>
        <?php
            for($i=8;$i>=0;$i--)
            {
				{
                    echo "<tr>
                    <td style='width: 120px;'>";
                    if($i==0)
                        echo "Giải Đặc biệt";
                    else
                        echo "Giải $i"; 
                    echo"</td>
                    <td class='flex-ngang'"; 
                    if($i==8 || $i==0)
                        echo "style='color:rgb(52, 50, 100);font-size:2em'"; 
                    echo ">".giai($i)."</td>
                        </tr>";
                }
            }
        ?>
    </table>
	<?php 
        if(isset($_POST['so_ve']))
        if(!empty($array))
        {
            foreach ($array as $value){
                $giai = $value[1];
                $so = $value[0];
                if($giai == 0)
                {
                    $giai = "Đặc Biệt";
                }
                echo "<b style='text-align:center;'>Bạn đã trúng giải $giai: </b>$so";
            }
		}
		else
		{
			 echo "<b style='text-align:center;'>Chúc bạn may mắn lần sau</b>";
		}
	?>
</body>
</html>