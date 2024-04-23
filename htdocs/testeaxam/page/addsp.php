<?php if(isset($thongbao)&&($thongbao !="")) 
     echo '<div class="container w-50 p-2 text-light rounded mt-2 bg-success"> '.$thongbao.' </div> '; ?>

<div class="container w-50 bg-1 mt-3 mb-4 pt-2">
    <h1 class="title">Thêm sản phẩm mới</h1>
    <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data" class="was-validated p-3 mt-2">
        <div class="mb-3 mt-3 ">
            <label for="tensp" class="form-label">Tên sản phẩm</label>
            <input type="text" name="tensp" id="tensp" class="form-control" placeholder="Nhập tên sản phẩm" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="mb-3 mt-3 ">
            <label for="hinh" class="form-label">Hình ảnh</label>
            <input type="file" name="hinhAnh" id="hinh" class="form-control" required> 
        </div>
        <div class="mb-3 mt-3 ">
            <label for="theloai" class="form-label">Thể loại</label>
            <input type="text" name="theloai" id="theloai" class="form-control" placeholder="Nhập thể loại" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="mb-3 mt-3 ">
            <label for="gia" class="form-label">Giá tiền</label>
            <input type="number" name="gia" id="gia" class="form-control" placeholder="Nhập giá tiền" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="mb-3 mt-3 ">
            <label for="xuatxu" class="form-label">Xuất xứ</label>
            <input type="text" name="xuatxu" id="xuatxu" class="form-control" placeholder="Nhập xuất xứ" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="mb-3 mt-3 ">
            <label class="form-label">Giới tính</label>
            <div class="mb-3 d-flex">
                <div class="gender m-1">
                    Nam <input type="radio" name="gioiTinh" id="nam"  value="0">
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="gender m-1">
                    Nữ <input type="radio" name="gioiTinh" id="nu" value="1">
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>
        </div>
        <div class="button">
            <input type="submit" class="btn btn-pro" name="themmoi" value="Thêm sản phẩm mới!">
        </div>
    </form>
    
</div>