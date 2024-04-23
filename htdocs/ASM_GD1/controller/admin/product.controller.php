<?php
  $path = "connect.php";
  include "$path";

  $Count = $conn->query("SELECT COUNT(*) AS SoSP FROM san_pham WHERE deleted = 0");
  $row = $Count->fetch(PDO::FETCH_ASSOC);
  $SoSP = $row['SoSP'];

  $SoSPHT = 5;
  $total_Page = ceil($SoSP / $SoSPHT);  
  $SoTHT = isset($_GET['page']) ? $_GET['page'] : 1;
  $start = ( ($SoTHT - 1) * $SoSPHT);

  $searchSP = isset($_GET['keyword']) ? $_GET['keyword'] : '';

  $sql = "SELECT * FROM san_pham WHERE deleted = 0 ";
  if (!empty($searchSP)) {
      $searchSP = str_replace('+', ' ', $searchSP);
      $sql .= "AND Ten_SP LIKE '%$searchSP%'";
  }
  $sql .= "ORDER BY Ma_SP LIMIT $start, $SoSPHT";

  $stmt = $conn->query($sql);
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
