<?php
  session_start();
  ob_start();
  if (!isset( $_SESSION['role']) && ( $_SESSION['role']) != 1 ) {
      header("Location: ../../view/account/signin.php");
      exit;
  }
  include '../../controller/admin/product.controller.php';
  include '../../controller/admin/status.controller.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../public/style/style.Admin.css">
  <title>Quản lý sản phẩm</title>
</head>
<body>
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
    <p><a href="../index.php">Trang chủ</a></p>
  </aside>
  <article class="content">
    <div class="menu-duoi">
      <div class="tim-kiem">
        <form action="./product.php" method="GET">
          <input class="seach" type="text" placeholder="Tìm kiếm sản phẩm..." name="keyword">
          <input class="submit" type="submit" value="🔍"></input>
        </form>
      </div>
      <div class="menu-duoi-1">
        <Button class="menu-duoi-01"><a style="color: aliceblue;text-decoration: none; " href="createSP.php">+Thên sản phẩm mới</a></Button>
      </div>
    </div>
    <div>
      <table class="table">
        <thead>
          <tr>
            <th class="stt">STT</th>
            <th class="image">Hình ảnh</th>
            <th class="name-product">Tên sản phẩm</th>
            <th class="gia">Giá</th>
            <th class="so-luong">Số lượng</th>
            <th class="vi-tri">Mã SP</th>
            <th class="status">Trạng thái</th>
            <th class="hanh-dong">Hành động</th>
          </tr>
        </thead>

        <tbody>
        <?php
        $i = 1;
        foreach ($result as $row) {
        ?>
          <tr>
            <td><?= $i ?></td>
            <td><img src="../../uploads/img/<?= $row['Image'] ?>" width="40px" height="40px"></td>
            <td><?= $row['Ten_SP'] ?></td>
            <td><?= number_format($row['Gia'], 0, ',', '.') ?> đ</td>
            <td><?= $row['So_Luong'] ?></td>
            <td><input style="width: 40px" type="number" value=<?= $row['Ma_SP'] ?>></td>
            <td><a href="../../controller/admin/status.controller.php?id=<?= $row['Ma_SP']?> "><button title="Thay đổi trạng thái" class="<?= $row['Status']?>"><?= ($row['Status'] == 'active') ? 'Hoạt động' : 'Dừng hoạt động' ?></button></a></td>
            <td>
              <a class="sua" href="editSP.php?id=<?= $row['Ma_SP'] ?>"><button class="sua">Sửa</button></a>
              <a href="../../controller/admin/delete.controller.php?id=<?=$row['Ma_SP'] ?>">
             <button title="Xóa sản phẩm" class="xoa">Xóa</button></a>
            </td>
          </tr>
        <?php
          $i++;
        }
        ?>
        <tr>
    <td colspan="8" style="text-align: center;">
        <?php
        // Tạo liên kết phân trang
        echo "<div class='pagination'>";
          if ($SoTHT > 1) {
              echo "<a href='?page=" . ($SoTHT - 1) . "'>Trang trước</a>";
          }
          for ($i = 1; $i <= $total_Page; $i++) {
              if ($i == $SoTHT) {
                  echo "<span class='current-page'>" . $i . "</span>";
              } else {
                  echo "<a href='?page=" . $i . "'>" . $i . "</a>";
              }
          }
          if ($SoTHT < $total_Page) {
              echo "<a href='?page=" . ($SoTHT + 1) . "'>Trang tiếp</a>";
          }
        echo "</div>";
        ?>
    </td>
</tr>
        
    </tbody>
    </table>
  </article>
</body>
</html>