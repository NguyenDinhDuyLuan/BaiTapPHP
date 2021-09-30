<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Tính diện tích hình tròn</title>
    <style type="text/css">

        table{
            background: #ffd94d;
            border: 10px solid purple;
        }
        thead{
            background: #fff14d;    
        }
        td {
            color: blue;
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
define("PI",3.14);
if(isset($_POST['bankinh'])) 
    $bankinh=trim($_POST['bankinh']); 
else $bankinh=0;
if(isset($_POST['tinh']))
        if (is_numeric($bankinh))
		{
            $dien_tich=PI*pow($bankinh,2);
			$chu_vi=2*PI*$bankinh;
		}
        else {
                echo "<font color='red'>Vui lòng nhập vào số! </font>"; 
                $dien_tich="";
				$chu_vi="";
            }
else {
	$dien_tich=0;
	$chu_vi=0;
}
?>
<form align='center' action="" method="post">
<table>
    <thead>
        <th colspan="2" align="center"><h3>DIỆN TÍCH HÌNH TRÒN</h3></th>
    </thead>
    <tr><td>Bán kính hình tròn:</td>
     <td><input type="text" name="bankinh" value="<?php  echo $bankinh;?> "/></td>
    </tr>
	<tr><td>Chu vi hình tròn:</td>
     <td><input type="text" name="chu_vi" disabled="disabled" value="<?php  echo $chu_vi;?> "/></td>
    </tr>
    <tr><td>Diện tích hình tròn:</td>
     <td><input type="text" name="dien_tich" disabled="disabled" value="<?php  echo $dien_tich;?> "/></td>
    </tr>
    <tr>
     <td colspan="2" align="center"><input autocomplete="off" type="submit" value="Tính" name="tinh" /></td>
    </tr>
</table>
</form>
</body>
</html>