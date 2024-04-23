<?php
session_start();
ob_start();
include '../controller/admin/connect.php';
include '../controller/client/product.CTL.php';
include '../controller/client/productPay.CTL.php';
$User;
if (!isset( $_SESSION['role'])) {
    header("Location: ../view/account/signin.php");
    exit;
}
if (isset($_SESSION['username'])) {
  $User = $_SESSION['username'];
} 
include ('../controller/client/product.CTL.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
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
  <article class="content">
    <div class="khoi1">
      <div class="anh-hot">
        <img src="./image/banner-realme-gt-neo-5se.jpg.webp">
      </div>
      <div class="sp-hot">
        <div class="hot-vien-1">
          <p class="sp-hot-vb">Tóp 3 sản phấm đang hót🔥</p>
        </div>
        <div class="sp-hot-1">
          <img src="./image/iphone-12-pro-max-cu-vang.jpg.webp" width="50px" height="50px">
          <p class="sp-hot-1-vb">Iphone 12 pro max vàng</p>
          <p class="price-1">Giá: 120.000.000đ</p>
        </div>
        <div class="sp-hot-1">
          <img src="./image/samsung-galaxy-s24-ultra-xam-titan.jpg.webp" width="50px" height="50px">
          <p class="sp-hot-1-vb">Iphone 12 pro max vàng</p>
          <p class="price-1">Giá: 120.00.0000đ</p>
        </div>
        <div class="sp-hot-1">
          <img src="./image/xiaomi-13-pro-sac-120w-trang.png.webp" width="50px" height="50px">
          <p class="sp-hot-1-vb">Iphone 12 pro max vàng</p>
          <p class="price-1">Giá: 120.000.000đ</p>
        </div>
      </div>
    </div>
    <div class="tieu-de-dt">
      <p>🔥 Combo phụ kiện dành cho iPhone 15 quá trời ưu đãi, giảm đến 30%, mua ngay! 🔥</p>
    </div>
    <div class="dien_thoai">
    <?php
        $i = 1;
        foreach ($productDT as $row) {
          $i++;
          if($i == 26){ break;}
        ?>
        <div class="vien-dt-1">
          <img src="../uploads/img/<?= $row['Image'] ?>" width="170px" height="180px">
          <p class="dien_thoai_vb-1"><?= $row['Ten_SP'] ?></p>
          <p class="dien_thoai_vb">Giá: <?= number_format($row['Gia'], 0, ',', '.') ?> đ</p>
          <form action="../controller/client/productPay.CTL.php" method="post">
            <input type="hidden" name="MaSP" value="<?= $row['Ma_SP']?>">
            <input type="hidden" name="User" value="<?= $User?>">
            <button style="margin-bottom: 10px;">Mua</button>
          </form>
          <button style="height: 36px;">🛒 Thêm vào giỏ hàng</button>
        </div>
    <?php } ?>
    </div>
    
    <div class="tieu-de-fk">
      <img width="50%" class="img-1" src="./image/27-quat-tan-nhiet-cx-01.jpg.webp">
      <img width="50%" class="img-2" src="./image/28-cu-cap-sac-xiaomi.jpg.webp">
    </div>
    <div class="phu-kien">
    <?php
        $i = 1;
        foreach ($productPK as $row) {
          $i++;
          if($i == 26){ break;}
        ?>
      <div class="vien-fk-1">
        <img src="../uploads/img/<?= $row['Image'] ?>"width="100px" height="100px">
        <p class="dien_thoai_vb-1"><?= $row['Ten_SP'] ?></p>
        <p class="dien_thoai_vb">Giá: <?= number_format($row['Gia'], 0, ',', '.') ?> đ</p>
        <button style="margin-bottom: 10px;">Mua ngay</button>
        <button style="height: 36px;">🛒 Thêm vào giỏ hàng</button>
      </div>
      <?php } ?>
    </div>
  </article>

  <footer class="footer">
  <div class="footer-1">
    <div class="vien-ft-1">
      <h2>Thông tin liên hệ</h2>
      <p>MICITY.VN</p>
      <p>Hotline: <i>0914886989</i></p>
      <p>E-mail: micity.vn@gmail.com</p>
      <p>Địa chỉ: R6 Royal City, Thanh Xuân - Hà Nội</p>
    </div>
    <div class="vien-ft-2">
      <h2>Về chúng tôi</h2>
      <p>Điều khoản sử dụng</p>
      <p>Chính sách bảo mật</p>
      <p>Liên hệ</p>
      <p>Chính sách cộng tác viên</p>
    </div>
    <div class="vien-ft-3">
      <h2>Kết nối với chúng tôi</h2>
      <div class="vien-ft-3-1">
        <img src="./image-fk/facebook.png" width="25px" height="25px">
        <a href="#">https://icons8.com/icons/set/facebook</a>
      </div>
      <div class="vien-ft-3-1">
        <img src="./image-fk/logo-shopee.png" width="25px" height="25px">
        <a href="#">https://shopee.vn/shop/micity</a>
      </div>
      <div class="vien-ft-3-1">
        <img src="./image-fk/tải xuống.png" width="50px" height="40px">
        <a href="#">https://www.youtube.com/channel/UCVO</a>
      </div>
    </div>
  </div>
  </footer>
</body>
</html>