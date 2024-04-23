<?php
$path = "connect.php";
include "$path";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $TenSP = $_POST['TenSP'];
    $Img = $_FILES['Img']['name'];
    $Img_tmp = $_FILES['Img']['tmp_name'];
    $Gia= $_POST['Gia'];
    $Status = $_POST['TrangThai'];
    $DanhMuc = $_POST['DanhMuc'];
    $SoLuong = $_POST['SoLuong'];
    // echo '<pre>';
    // print_r($_POST);
    // print_r($_FILES);
    // echo '<pre>';
    
    $sql = $conn->prepare( "INSERT INTO san_pham (Ten_SP, Image, Gia, Status, Ma_DM, So_Luong) VALUES ('$TenSP', '$Img', $Gia, '$Status', '$DanhMuc', '$SoLuong')");
    move_uploaded_file($Img_tmp, __DIR__ . '/../admin/imgKH/' . $Img);
    $sql->execute();
    echo "Thêm sản phẩm thành công";
    header("Location: " . $_SERVER['HTTP_REFERER']);
  }
?>