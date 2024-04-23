<?php 
    if (is_array($loadTin)) {
        extract($loadTin);
        $hinhpath="uploads/".$hinhAnh;
        if(is_file($hinhpath)){
            $hinh="<img src='".$hinhpath."' height='70'>";
        }else{
            $hinh="nophoto";
        }
    } ?>

<div class="container w-50 bg-1 mt-3 mb-4 pt-2 rounded">
    <h1 class="title">Cập nhật tin</h1>
    <form action="index.php?act=updateTin" method="POST" enctype="multipart/form-data" class="was-validated p-4 mt-2 ">
        <div class="mb-3 mt-3 ">
            <label for="tieuDe" class="form-label">Tiêu đề</label>
            <input type="text" name="tieuDe" id="tieuDe" class="form-control" value="<?=$tieuDe?>">
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="mb-3 mt-3 ">
            <label for="hinh" class="form-label">Hình ảnh</label>
            <input type="file" name="hinhAnh" id="hinh" class="form-control"><?=$hinh?>
        </div>
        <div class="mb-3 mt-3 ">
            <label for="soLanXem" class="form-label">Số lần xem</label>
            <input type="number" name="soLanXem" id="soLanXem" min="0" class="form-control" value="<?=$soLanXem?>">
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="mb-3 mt-3 ">
            <label for="ngayDuaTin" class="form-label">Ngày đưa tin</label>
            <input type="date" name="ngayDuaTin" id="ngayDuaTin" class="form-control" value="<?=$ngayDuaTin?>">
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="mb-3 mt-3 ">
            <label for="tomTat" class="form-label">Tóm tắt</label>
            <input type="text" name="tomTat" id="tomTat" class="form-control" value="<?=$tomTat?>">
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="button">
            <input type="hidden" name="maTin" value="<?=$maTin?>">
            <input type="submit" class="btn btn-pro" name="capnhat" value="Cập nhật tin!">
        </div>
    </form>
    
</div>