<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../public/style/login.css">
  <title>Document</title>
</head>
<body>
<div class="login-container">
<h2 style="margin-left: 490px; color:white;">Đăng nhập tài khoản</h2>
<form class="form-login"  action="../../controller/account/signin.CTL.php" method="POST" enctype="multipart/form-data">
    <div>
      <label for="Username">Tên đăng nhập:</label><br>
      <input placeholder="Username" type="text" name="Username" required>
    </div>
    <div>
      <label for="Password">Mật khẩu:</label><br>
      <input placeholder="Password" type="password" name="Password" required>
    </div>
      <button class="button" type="submit">Đăng nhập</button>
  </form>
</div>
</body>
</html>