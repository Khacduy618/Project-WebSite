<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../public/style/style.Admin.css">
  <title>Quản lý sản phẩm</title>
</head>
<body>
<?php
  include '../../database/connect.php';
  $stmt = $conn->query("SELECT * FROM Khach_Hang");
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
    <div class="menu-duoi">
      <div class="tim-kiem">
        <form action="#" method="post">
          <input class="seach" type="text" placeholder="Tìm kiếm sản phẩm...   ">
          <input class="submit" type="submit" value="🔍"></input>
        </form>
      </div>
    <div class="menu-duoi-1">
      <Button class="menu-duoi-01"><a style="color: aliceblue;text-decoration: none; " href="../account/login.php">+Thên khách hàng mới</a></Button>
    </div>
    </div>
    <div>
      <table class="table">
        <thead>
          <tr>
            <th class="stt-KH">STT</th>
            <th class="image-KH">Hình ảnh</th>
            <th class="name-KH">Tên khách hàng</th>
            <th class="ma-KH">Mã khách hàng</th>
            <th class="sdt-KH">Số điện thoại</th>
            <th class="dc-KH">Đia chỉ</th>
            <th class="emai-KH">Email</th>
            <th class="tuoi-KH">Tuổi</th>
            <th class="username-KH">Username</th>
            <th class="hanh-dong-KH">Hành động</th>
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
                <td><?= $row['Ten_KH'] ?></td>
                <td><?= $row['Ma_KH'] ?></td>
                <td><?= $row['SDT'] ?></td>
                <td><?= $row['Dia_Chi'] ?></td>
                <td><?= $row['Email'] ?></td>
                <td><?= $row['Ngay_Sinh'] ?></td>
                <td><?= $row['Username'] ?></td>
                <td>
                    <button class="sua">Sửa</button>
                    <button class="xoa">Xóa</button>
                </td>
              </tr>
          <?php 
              $i++;
          }
         ?>
        </tbody>
    </table>
  </article>
</body>
</html>