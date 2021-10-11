<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $dsmh = [
            'A001' => ['Sữa tắm XMen', 'Chai 50ml', 50],
            'A002' => ['Dầu gội đầu Lifeboy', 'Chai 50ml', 20],
            'B001' => ['Dầu ăn Cái Lân', 'Chai 1 lít', 10],
            'B002' => ['Đường cát', 'Kg', 15],
            'C001' => ['Chén sứ Minh Long', 'Bộ 10 cái', 2],
        ];
        $maMH = isset($_POST['maMH']) ? $_POST['maMH'] : '';
        $tenMH = isset($_POST['tenMH']) ? $_POST['tenMH'] : '';
        $donViTinh = isset($_POST['donViTinh']) ? $_POST['donViTinh'] : '';
        $soLuong = isset($_POST['soLuong']) ? $_POST['soLuong'] : '';
        $thongbao="";
        if (isset($_POST['submit'])){
            if(!empty($maMH)) {
                $dsmh[$maMH] = [$tenMH, $donViTinh, $soLuong];
                $thongbao="Thêm thành công !";
            } else {
                $thongbao = "Khong được bỏ trống mã mặt hàng !";
            }
        }
    ?>
    <form action="" method="POST" >
        <table>
            <tr>
                <td>Mã mặt hàng</td>
                <td><input type="text" name="maMH" value="<?php echo $maMH; ?>"></td>
            </tr>
            <tr>
                <td>Tên mặt hàng</td>
                <td><input type="text" name="tenMH" value="<?php echo $tenMH; ?>"></td>
            </tr>
            <tr>
                <td>Đơn vị tính</td>
                <td><input type="text" name="donViTinh" value="<?php echo $donViTinh; ?>"></td>
            </tr>
            <tr>
                <td>Số lượng</td>
                <td><input type="number" name="soLuong" value="<?php echo $soLuong; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Thêm"></td>
            </tr>
            <tr>
                <td colspan="2"><?php echo $thongbao; ?></td>
            </tr>
        </table>
    </form>

    <table border="1" cellspacing="0">
        <tr>
            <th>Mã mặt hàng</th>
            <th>Tên mặt hàng</th>
            <th>Đơn vị</th>
            <th>Số lượng</th>
        </tr>
        <?php
        foreach ($dsmh as $maMH => $chiTietMH) {
            echo '<tr>';
            echo '<td>' . $maMH . '</td>';
            foreach ($dsmh[$maMH] as $chiTietMH) {
                echo '<td>' . $chiTietMH . '</td>';
            }
            echo '</tr>';
        }
        ?>
    </table>
</body>
</html>