<?php
include '../../database/connect.php';
// Kiểm tra nếu form được gửi
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ form
    $Ten_KH = $_POST['TenKH'];
    $Dia_Chi = $_POST['DiaChi'];
    $SDT = $_POST['SDT'];
    $Img = $_FILES['Img']['name'];
    $Img_tmp = $_FILES['Img']['tmp_name'];
    $Email = $_POST['Email'];
    $Ngay_Sinh = $_POST['NgaySinh'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $PasswordMD = md5($Password);
    echo '<pre>';
    print_r($_POST);
    print_r($_FILES);
       
    // Cập nhật sản phẩm trong cơ sở dữ liệu
    $stmt = $conn->prepare("INSERT INTO khach_hang (Ten_KH, Image, Dia_Chi, SDT, Email, Ngay_Sinh, Username, Password) VALUES (:Ten_KH, :Img, :Dia_Chi, :SDT, :Email, :Ngay_Sinh, :Username, :Password)");
    // Xử lý ảnh (nếu có)
    move_uploaded_file($Img_tmp, __DIR__ . '/../admin/imgKH/' . $Img);
    $stmt->bindParam(':Ten_KH', $Ten_KH);
    $stmt->bindParam(':Dia_Chi', $Dia_Chi);
    $stmt->bindParam(':SDT', $SDT);
    $stmt->bindParam(':Img', $Img);
    $stmt->bindParam(':Email', $Email);
    $stmt->bindParam(':Ngay_Sinh', $Ngay_Sinh);
    $stmt->bindParam(':Username', $Username);
    $stmt->bindParam(':Password', $PasswordMD);
    $stmt->execute();
    header("Location: ../../view/account/signin.php");
}
?>