<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../public/style/login.css">
  <title>Đăng kí</title>
</head>

<body>
  <form class="form-login" action="../../controller/account/createKH.CTL.php" method="POST" enctype="multipart/form-data">
    <h2 style="text-align: center; color:white;">Đăng kí tài khoản</h2>
    <div>
      <label for="TenKH">Họ và tên:</label><br>
      <input placeholder="Họ và tên..." type="text" name="TenKH" required>
    </div>
    <div>
      <label for="DiaChi">Địa chỉ:</label><br>
      <input placeholder="Xã - Huyện - Tỉnh" type="text" name="DiaChi" required>
    </div>
    <div>
      <label for="SDT">Số điện thoại:</label><br>
      <input placeholder="Số điện thoại..." type="number" name="SDT" required>
    </div>
    <div>
      <label for="Email">Email:</label><br>
      <input placeholder="Email..." type="email" name="Email" required>
    </div>
    <div>
      <label for="NgaySinh">Ngày sinh:</label><br>
      <input type="date" name="NgaySinh">
    </div>
    <div>
      <label for="Img">Ảnh đại diện:</label><br>
      <input type="file" name="Img" required>
    </div>
    <div>
      <label for="Username">Tên đăng nhập:</label><br>
      <input placeholder="Username" type="text" name="Username" required>
    </div>
    <div>
      <label for="Password">Mật khẩu:</label><br>
      <input placeholder="Password" type="password" name="Password" required>
    </div>
      <button class="button" type="submit">Đăng kí</button>
  </form>
</body>
</html>