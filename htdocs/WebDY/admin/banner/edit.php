<?php
    if(is_array($banner)){
        extract($banner);
    }
    $hinhpath="uploads/".$thumbnail;
        if(is_file($hinhpath)){
            $hinh="<img src='".$hinhpath."' height='70'>";
        }else{
            $hinh="nophoto";
        }
?>
<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="index.php?act=listbn">Danh sách banner</a></li>
        <li class="breadcrumb-item"><a href="index.php?act=updatebn">Cập nhật banner</a></li>
      </ul>
    </div>
    <div class="row">
      <form action="index.php?act=updatebn" method="post" enctype="multipart/form-data">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Cập nhật banner</h3>
          <div class="tile-body">
            <form class="row">
              <div class="form-group col-md-5">
                <label class="control-label">ID</label>
                <input class="form-control" type="number" name="id" value="<?=$id?>" placeholder="" disabled>
              </div>
              <div class="form-group col-md-5">
                <label class="control-label">Tiêu đề</label>
                <input class="form-control" type="text" name="title" value="<?=$title?>">
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Nội dung</label>
                <textarea class="form-control" name="content" col="30" rows="10" "><?=$content?></textarea>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Ảnh sản phẩm</label>
                <input class="form-control" type="file" name="Hinhanh" id="fileToUpLoad">
                <?=$hinh?>
              </div>

          </div>
          <input type="hidden" name="id" value="<?=$id?>">
          <button class="btn btn-save" type="submit" name="Capnhat" value="Cập nhật">Cập nhật</button>
          <a class="btn btn-cancel" href="index.php?act=listbn">Hủy bỏ</a>
        </div>
            <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
    </form>
  </main>