<?php
session_start(); 
ob_start();
include '../../database/connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $PasswordMD = md5($Password);
    
    $stmt = $conn->prepare("SELECT * FROM khach_hang WHERE Username = '$Username' AND Password = '$PasswordMD'");
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        $role = $result['role'];       
        $_SESSION['username'] = $result['Username'];
        $_SESSION['role'] = $role;
        if ($role === true || $role === 1 || $role === '1') {
            header("Location: ../../view/admin/product.php");
            exit;
        } elseif ($role === false || $role === 0 || $role === '0') {
            header("Location: ../../view/client/index.php");
            exit;
        } else {
            echo "Giá trị của role không hợp lệ: " . $role;
        }
    } else {
        echo "Tên đăng nhập hoặc mật khẩu không đúng!";
    }

}
?>