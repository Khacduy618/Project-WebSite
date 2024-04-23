<?php
include '../../database/connect.php';
$product_id = isset($_GET['id']) ? $_GET['id'] : null;

if ($product_id) {
    $stmt = $conn->prepare("SELECT * FROM san_pham WHERE Ma_SP = :id");
    $stmt->bindParam(':id', $product_id, PDO::PARAM_INT);
    $stmt->execute();
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    // echo $product['Status'];
    if ($product) {
        $newStatus = ($product['Status'] == 'active') ? 'inactive' : 'active';
        // echo $newStatus;
        // Cập nhật trạng thái deleted của sản phẩm
        $updateStmt = $conn->prepare("UPDATE san_pham SET Status = :newStatus WHERE Ma_SP = :id");
        $updateStmt->bindParam(':newStatus', $newStatus, PDO::PARAM_STR);
        $updateStmt->bindParam(':id', $product_id, PDO::PARAM_INT);
        $updateStmt->execute();
        if ($updateStmt->execute() == true) {
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit();
        }   
    }
}
?>