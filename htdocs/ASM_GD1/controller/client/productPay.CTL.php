<?php
include '../admin/connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['User']) && isset($_POST['MaSP'])) {
    $Ma_SP = $_POST['MaSP'];
    $User = $_POST['User'];

  if (!empty($Ma_SP) && !empty($User)) {
    $stmt = $conn->prepare("SELECT * FROM san_pham WHERE deleted = 0 AND Ma_SP = :Ma_SP");
    $stmt->bindParam(':Ma_SP', $Ma_SP);
    $stmt->execute();
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    $stmtKH = $conn->prepare("SELECT * FROM khach_hang WHERE deleted = 0 AND Username = :User");
    $stmtKH->bindParam(':User', $User);
    $stmtKH->execute();
    $client = $stmtKH->fetch(PDO::FETCH_ASSOC);
    if($stmtKH->execute() == true && $stmt->execute() == true){
      header("Location: ../../view/client/productPay.php");
    }
  }
}
?>