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
        $n = $_POST['n'] ?? 0;
        $m = $_POST['m'] ?? 0;
        $maTran = [];
        $ketqua = '';
        
        // tạo ma trận
        function taoMaTran($n,$m) {
            global $maTran;
            for ($hang = 0; $hang < $n; $hang++) {
                for ($cot = 0; $cot < $m; $cot++) {
                    $maTran[$hang][$cot] = rand(-200, 200);
                }
            }
        }

        // đếm số phần tử có số cuối là số lẻ
        function demPhanTuLe($maTran, $n, $m)
        {
            $soPhanTuLe = 0;
            for ($hang = 0; $hang < $n; $hang++) {
                for ($cot = 0; $cot < $m; $cot++) {
                    if ($maTran[$hang][$cot] % 2 != 0) {
                        $soPhanTuLe++;
                    }
                }
            }
            return $soPhanTuLe;
        }

        // thay thế các phần từ khác 0 thành 1
        function thayTheCacPhanTu($maTran, $n, $m) {
            for ($hang = 0; $hang < $n; $hang++) {
                for ($cot = 0; $cot < $m; $cot++) {
                    if ($maTran[$hang][$cot] != 0) {
                        $maTran[$hang][$cot] = 1;
                    }
                }
            }
            return $maTran;
        }

        // hàm in ma trận
        function inMaTran($maTran, $n, $m) {
            $mt = "";
            for ($hang = 0; $hang < $n; $hang++) {
                for ($cot = 0; $cot < $m; $cot++) {
                    $mt .= $maTran[$hang][$cot] . " ";
                }
                $mt .= "\n";
            }
            return $mt;
        }

        if (isset($_POST['submit'])) {
            if (is_numeric($n) && is_numeric($m) && $n > 0 && $m > 0) {

                taoMaTran($n,$m);
    
                // in ma trận vừa tạo
                $ketqua = "Ma trận được tạo: \n";
                $ketqua .= inMaTran($maTran, $n, $m) ;
                // đếm số phần tử có chữ số cuối là số lẻ
                $ketqua .= "\nSố phần tử có chữ số cuối là số lẻ: " . demPhanTuLe($maTran, $n, $m)
                    . "\n";
                // Thay thế các phần tử khác 0 thành 1. In ra ma trận sau khi thay thế.
                $maTran = thayTheCacPhanTu($maTran, $n, $m);
                $ketqua .= "Thay thế các phần tử khác 0 thành 1. In ra ma trận sau khi thay thế.\n";
                $ketqua .= inMaTran($maTran, $n, $m);
            }
            else{
                $ketqua = 'Giá trị n và m phải lớn hơn 0';
            }
        }
    ?>
    <form action="" method="post">
        <div>
        Nhập n: <input type="number" name="n" value="<?php echo $n; ?>">
        Nhập m: <input type="number" name="m" value="<?php echo $m; ?>">
        <input type="submit" name="submit" value="Submit">
        </div>
        <textarea name="ketqua" id="" cols="60" rows="20"><?php echo $ketqua; ?></textarea>
    </form>

</body>
</html>