<?php
include '../admin/connect.php';
  $stmt = $conn->prepare("SELECT * FROM san_pham WHERE deleted = 0 AND Ma_DM = 1");
  $stmt->execute();
  $productDT = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<?php
  $stmt = $conn->prepare("SELECT * FROM san_pham WHERE deleted = 0 AND Ma_DM = 2");
  $stmt->execute();
  $productPK = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>