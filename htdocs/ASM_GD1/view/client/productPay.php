<?php
include '../../controller/client/product.CTL.php';
include '../../controller/client/productPay.CTL.php';
// Hiển thị thông tin sản phẩm
foreach ($client as $product) {
  extract($product);
  var_dump($product);
}
// if (isset($product)) {
//   print_r($product['Ten_SP']);
// } else {
//   echo "Không có thông tin sản phẩm.";
// }
?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Trang chủ</title>
</head>
<body style="font-family: roboto;">
  <header class="header">
    <div class="vien-1">
      <img src="./image/Xiaomi_logo_(2021-).svg.png" width="30px" height="30px">
      MI CITY
    </div>
    <div class="vien-2">
      <label class="chi-nhanh-1" for="chi-nhanh">Xem giá, tồn kho tại: </label>
        <select class="chi-nhanh" name="chi-nhanh">
          <option value="">Hà Nội</option>
          <option value="">Đà Nẵng</option>
          <option value="">TP Hồ Chí Minh</option>
        </select>
    </div>
    <div class="vien-3">
      <form action="#" method="post">
        <input class="seach" type="text" placeholder="Tìm kiếm sản phẩm...   ">
        <input class="submit" type="submit" value="🔍"></input>
      </form>
    </div>
    <div class="vien-4">
      <img class="login" src="./image/icon_login.png" width="15px" height="15px">
      <div class="login-1">Đăng nhập</div>
    </div>
    <div class="vien-5">
      <img class="login" src="./image/icon_login.png" width="15px" height="15px">
      <div class="login-1">Đăng kí</div>
    </div>
    <div class="vien-6">Tra cứu BH</div>
    <div class="vien-6">Giới thiệu</div>
  </header>
  <nav class="nav">
    <div class="menu-1">
      <img src="./image/smartPhone.png" width="30px" height="30px">
      <div class="menu-vb1"> Điện thoại</div>
      <ul class="sub-menu" type="none">
        <li>Menu con 1</li>
        <li>Menu con 2</li>
        <li>Menu con 3</li>
      </ul>
    </div>
    <div class="menu-1">
      <img src="./image/tablet.png" width="30px" height="30px">
      <div class="menu-vb1"> Máy tính bảng</div>
    </div>
    <div class="menu-1">
      <img src="./image/laptop.png" width="30px" height="30px">
      <div class="menu-vb1"> Laptop</div>
    </div>
    <div class="menu-1">
      <img src="./image/tv.png" width="30px" height="30px">
      <div class="menu-vb1"> Tivi</div>
    </div>
    <div class="menu-1">
      <img src="./image/charging.png" width="30px" height="30px">
      <div style="margin-left: 3px;" class="menu-vb1">Phụ Kiện</div>
    </div>
  </nav>
  <article class="content-1">
    <div>
      <div class="title">
        <img src="image-dt/cod-credit-debit-bank-transaction-32259.webp" width="60px" height="80px">
        <h2>Thanh toán</h2>
        <p>Vui lòng kiểm tra thông tin trước khi thanh toán !</p>
      </div>

      <form action="" method="post">
        <div class="product">
          <img src="image-dt/iphone-11-pro-max-vang.jpg.webp" width="50px" height="50px">
          <div class="product-content">
          <!-- <p><?= $product['Ten_SP'] ?></p>
          <p>đ <?= number_format($product['Gia'], 0, ',', '.') ?></p> -->
          </div>
        </div>
    </div>
    <div class="form-kh">
      <h2 style="text-align: center;">Thông tin khách hàng</h2>
      <div>
        <label for="TenKH">Họ và tên:</label><br>
        <input  type="text" name="TenKH" 1>
      </div>
      <div>
        <label for="DiaChi">Địa chỉ:</label><br>
        <input type="text" name="DiaChi" required>
      </div>
      <div>
        <label for="SDT">Số điện thoại:</label><br>
        <input type="number" name="SDT" required>
      </div>
      <div>
        Tổng tiền: <button class="button-price" >89893289 đ</button>
        <button class="button-submit" type="submit">Đặt hàng</button>
      </div>
    </div>
  </form>
  </footer>
  <script src="../../public/script/index.js"></script>
</body>
</html>