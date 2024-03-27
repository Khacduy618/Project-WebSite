<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài thêm</title>
    <style>
        table,tr,td{
            border: 2px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
    $luongnvtv=1000;
    $luongnvkd=1500;
    $luongnvit=2000;
    echo"
    <table>
        <tr>
            <td>
                Lương nhân viên tư vấn
            </td>
            <td>
                $luongnvtv$
            </td>
        </tr>
        <tr>
            <td>
                Lương nhân viên kinh doanh
            </td>
            <td>
                $luongnvkd$
            </td>
        </tr>
        <tr>
            <td>
                Lương nhân viên IT
            </td>
            <td>
                $luongnvit$
            </td>
        </tr>
    </table>";
    
    $file=basename($_SERVER['PHP_SELF']);
        $so_dong = count(file($file));
        echo "Có $so_dong dòng trong $file"."<br>";

        function toan_tu_tam_phan ($n) {
            $r = $n > 20 ? "lớn hơn 20" : ($n > 15  ? "lớn hơn 15" : ($n > 10 ? "lớn hơn 10" : "số vừa nhập là nhỏ hơn 10!"));
            echo $n." : ".$r."<br>";
        }
        toan_tu_tam_phan(42);
        toan_tu_tam_phan(21);
        toan_tu_tam_phan(12);
        toan_tu_tam_phan(5);
    ?>
    
</body>
</html>