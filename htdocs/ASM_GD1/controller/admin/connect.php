<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$namedb = 'webproduct';

try {
  $conn= new PDO("mysql:host=$servername;dbname=$namedb", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo 'Kết nối thành công';
} catch(PDOException $e) {
  echo 'Lỗi kết nối: ' . $e->getMessage();
}
?>
