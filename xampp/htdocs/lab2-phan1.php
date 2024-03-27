<?php
    //bài 1
    $color=array('red','green','white');
    print_r($color);
    echo '</br>';
    echo $color[0];

    $age = [];
    $age[0] = 10;
    $age[1] = 20;
    $age[3] = 30;
    print_r($age);

    //bài 2 
    $salaries = array(
        "mohammad" => 2000,
        "quadir" => 1000,
        "zara" => 500
    );
    echo "<br>Salary of mohammad is ". $salaries['mohammad'] . "<br />";
    echo "Salary of quadir is ". $salaries['quadir'] . "<br />";
    echo "Salary of zara is ". $salaries['zara'] . "<br />";

    //bài 3
    define('LOCATOR', "/locator");
    define('CLASSES', LOCATOR."/code/classes");
    define('FUNTIONS', LOCATOR."/code/funtions");
    define('USERDIR', LOCATOR."/code/user");

    //bài thêm

    $mang_so_nguyen = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
    68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";

    // Chuyển đổi chuỗi thành mảng
    $mang = explode(",", $mang_so_nguyen);
    $tong = 0;
    $so_luong_phan_tu = count($mang);
    foreach ($mang as $so) {
    $tong += $so;
    }
    $gia_tri_trung_binh = $tong / $so_luong_phan_tu;
    // Sắp xếp mảng theo thứ tự tăng dần
    sort($mang);

    // Lấy 5 phần tử đầu tiên (nhỏ nhất)
    $mang_5_nho_nhat = array_slice($mang, 0, 5);

    // Lấy 5 phần tử cuối cùng (lớn nhất)
    $mang_5_lon_nhat = array_slice($mang, -5);
    echo "Giá trị trung bình: " . $gia_tri_trung_binh . "<br>";

    echo "Liệt kê 5 phần tử nhỏ nhất: ";
    foreach ($mang_5_nho_nhat as $so) {
    echo $so . ", ";
    }

    echo "<br>";

    echo "Liệt kê 5 phần tử lớn nhất: ";
    foreach ($mang_5_lon_nhat as $so) {
    echo $so . ", ";
    }
?>