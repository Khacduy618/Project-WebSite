<?php
include '../../database/connect.php';
$product_id = isset($_GET['id']) ? $_GET['id'] : null;
// echo $product_id;

if ($product_id) {
    // Cập nhật trạng thái deleted của sản phẩm
    $updateStmt = $conn->prepare("UPDATE san_pham SET deleted = 1 WHERE Ma_SP = :id");
    $updateStmt->bindParam(':id', $product_id, PDO::PARAM_INT);
    $updateStmt->execute();
    
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
}
?>