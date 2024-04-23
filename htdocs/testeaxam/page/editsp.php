<?php 
    if (is_array($loadsp)) {
        extract($loadsp);
        $hinhpath="uploads/".$hinhAnh;
        if(is_file($hinhpath)){
            $hinh="<img src='".$hinhpath."' height='70'>";
        }else{
            $hinh="nophoto";
        }
    } ?>

<div class="container w-50 bg-1 mt-3 mb-4 pt-2">
    <h1 class="title">Cập nhật sản phẩm</h1>
    <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data" class="was-validated p-3 mt-2">
        <div class="mb-3 mt-3 ">
            <label for="tensp" class="form-label">Tên sản phẩm</label>
            <input type="text" name="tenHoa" id="tensp" class="form-control" value="<?=$tenHoa?>">
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="mb-3 mt-3 ">
            <label for="hinh" class="form-label">Hình ảnh</label>
            <input type="file" name="hinhAnh" id="hinh" class="form-control"><?=$hinh?>
        </div>
        <div class="mb-3 mt-3 ">
            <label for="theloai" class="form-label">Thể loại</label>
            <input type="text" name="theLoai" id="theloai" class="form-control" value="<?=$theLoai?>">
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="mb-3 mt-3 ">
            <label for="gia" class="form-label">Giá tiền</label>
            <input type="number" name="giaTien" id="gia" class="form-control" value="<?=$giaTien?>">
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="mb-3 mt-3 ">
            <label for="xuatxu" class="form-label">Xuất xứ</label>
            <input type="text" name="xuatXu" id="xuatxu" class="form-control" value="<?=$xuatXu?>">
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="mb-3 mt-3 ">
            <label class="form-label">Giới tính</label>
            <div class="mb-3 d-flex">
                Nam <input type="radio" name="gioiTinh" id="nam"  value="0" <?php if ($gioiTinh == 0 ) {
                    echo"Checked";
                } ?>>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
                Nữ <input type="radio" name="gioiTinh" id="nu" value="1" <?php if ($gioiTinh == 1 ) {
                    echo"Checked";
                } ?>>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
        </div>
        <div class="button">
            <input type="hidden" name="maHoa" value="<?=$maHoa?>">
            <input type="submit" class="btn btn-pro" name="capnhat" value="Cập nhật sản phẩm!">
        </div>
    </form>
    
</div>