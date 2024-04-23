<?php
  $path = "connect.php";
  include "$path";

// Kiểm tra nếu form được gửi
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ form
    $ma_sp = $_POST['MaSP'];
    $ten_sp = $_POST['TenSP'];
    $gia = $_POST['Gia'];
    $Img_tmp = $_FILES['Img']['tmp_name'];
    $so_luong = $_POST['SoLuong'];
    $trang_thai = $_POST['TrangThai'];
    $ma_dm = $_POST['DanhMuc'];

    // echo '<pre>';
    // print_r($_POST);
    // print_r($_FILES);
    // echo '<pre>';

    // Xử lý ảnh (nếu có)
    $image = $_POST['image_old']; // Giữ nguyên ảnh cũ nếu không có ảnh mới được tải lên
    if (isset($_FILES['Img']) && $_FILES['Img']['error'] === UPLOAD_ERR_OK) {
        $file_tmp = $_FILES['Img']['tmp_name'];
        $file_name = $_FILES['Img']['name'];
        $file_destination = '../admin/img/' . $file_name;
        move_uploaded_file($file_tmp, $file_destination);
        $image = $file_name;
    }
    
    // Cập nhật sản phẩm trong cơ sở dữ liệu
    $stmt = $conn->prepare("UPDATE san_pham SET Ten_SP = :ten_sp,  Gia =:gia, So_Luong = :so_luong, Status = :trang_thai, Image = :image, Ma_DM = :ma_dm WHERE Ma_SP = :id");
    $stmt->bindParam(':ten_sp', $ten_sp);
    $stmt->bindParam(':gia', $gia);
    $stmt->bindParam(':so_luong', $so_luong);
    $stmt->bindParam(':trang_thai', $trang_thai);
    $stmt->bindParam(':image', $image);
    $stmt->bindParam(':ma_dm', $ma_dm);
    $stmt->bindParam(':id', $ma_sp, PDO::PARAM_INT);
    $stmt->execute();

    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
}
?>