<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../public/style/create.css">
  <title>Quản lý sản phẩm</title>
</head>
<body>
<?php
include '../../database/connect.php';

// Lấy Ma_SP từ tham số URL
$product_id = isset($_GET['id']) ? $_GET['id'] : null;

if ($product_id) {
  $stmt = $conn->prepare("SELECT * FROM san_pham WHERE Ma_SP = :id");
  $stmt->bindParam(':id', $product_id, PDO::PARAM_INT);
  $stmt->execute();
  $product = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
  <header class="header">
    <div class="tieu-de">
      <h1>Admin</h1>
    </div>
  </header>
  <aside class="menu">
  <p><a href="">Trang tổng quan</a></p>
    <p><a href="./product.php">Danh sách sản phẩm</a></p>
    <p><a href="./khach-hang.php">Danh sách khách hàng</a></p>
    <p><a href="">Danh mục sản phẩm</a></p>
    <p><a href="">Phân quyền</a></p>
    <p><a href="../client/index.php">Trang chủ</a></p>
  </aside>
  <article class="content">
    <h2 style="color: white;margin-left: 10px;">Chỉnh sửa sản phẩm</h2>
    <form action="../../controller/admin/edit.controller.php" method="POST" enctype="multipart/form-data">
      <div>
        <label for="TenSP">Tên sản phẩm:</label><br>
        <input type="text" name="TenSP" value="<?= $product['Ten_SP'] ?>" accept="image/*" required>
      </div>
      <div>
        <label for="Img">Hình ảnh sản phẩm:</label><br>
        <img src="../img/<?= $product['Image'] ?>" width="100" height="100" alt="Product Image">
        <input type="file" name="Img">
        <input type="hidden" name="image_old" value="<?= $product['Image'] ?>">
      </div>
      <div>
        <label for="Gia">Giá sản phẩm:</label><br>
        <input type="number" name="Gia" value="<?= $product['Gia'] ?>" required>
      </div>
      <div>
        <label for="MaSP">Mã sản phẩm:</label><br>
        <input type="number" name="MaSP" value="<?= $product['Ma_SP'] ?>" required>
      </div>
      <div>
        <label for="Status">Trạng thái:</label><br>
        <select id="Status" name="TrangThai" required>
          <option value="active" <?= $product['Status'] == 'active' ? 'selected' : '' ?>>Hoạt động</option>
          <option value="inactive" <?= $product['Status'] == 'inactive' ? 'selected' : '' ?>>Dừng hoạt động</option>
        </select>
      </div>
      <div>
        <label for="SoLuong">Số lượng</label><br>
        <input type="number" name="SoLuong" value="<?= $product['So_Luong'] ?>">
      </div>
      <div>
        <label for="DanhMuc">Danh mục:</label><br>
        <input type="number" name="DanhMuc" value="<?= $product['Ma_DM'] ?>" required>
      </div>
        <button type="submit">Cập nhật</button>
        </form>
  </article>

</body>
</html>