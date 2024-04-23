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
  include '../../controller/admin/product.controller.php';
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
    <p><a href="">Mục sản phẩm</a></p>
    <p><a href="">Phân quyền</a></p>
    <p><a href="../client/index.php">Trang chủ</a></p>
  </aside>
  <article class="content">
    <h2 style="color: white;margin-left: 10px;">Thêm mới sản phẩm</h2>
    <form action="../../controller/admin/createSP.CTL.php" method="POST" enctype="multipart/form-data">
      <div>
        <label for="TenSP">Tên sản phẩm:</label><br>
        <input type="text" name="TenSP" required>
      </div>
      <div>
      <label for="Img">Hình ảnh sản phẩm:</label><br>
      <input type="file" name="Img" accept="image/*" required>
      </div>
      <div>
        <label for="Gia">Giá sản phẩm:</label><br>
        <input type="number" name="Gia" required>
      </div>
      <div>
        <label for="Status">Trạng thái:</label><br>
        <select id="Status" name="TrangThai" required>
            <option value="active">Hoạt động</option>
            <option value="inactive">Dừng hoạt động</option>
        </select>
      </div>
      <div>
        <label for="SoLuong">Số lượng</label><br>
        <input type="number" name="SoLuong">
      </div>
      <div>
        <label for="DanhMuc">Danh muc:</label><br>
        <input type="text" name="DanhMuc" required>
      </div>
        <button type="submit">+ Thêm sản phẩm</button>
      </form>
  </article>
</body>
</html>