<?php
include '../database/connect.php';

$search_query = isset($_POST['search']) ? $_POST['search'] : '';
$sql = "SELECT * FROM san_pham WHERE deleted = 0";

if (!empty($search_query)) {
    $sql .= " AND Ten_SP LIKE '%$search_query%'";
}

$sql .= " ORDER BY Ma_SP LIMIT $start, $SoSPHT";

$stmt = $conn->query($sql);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
