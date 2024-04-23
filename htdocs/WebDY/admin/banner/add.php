
<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="index.php?act=listbn">Danh sách banner</a></li>
        <li class="breadcrumb-item"><a href="index.php?act=addbn">Thêm banner</a></li>
      </ul>
    </div>
    <div class="row">
      <form action="index.php?act=addbn" method="post" enctype="multipart/form-data">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Tạo mới banner</h3>
          <div class="tile-body">
              <div class="form-group col-md-5">
                <label class="control-label">Tiêu đề</label>
                <input class="form-control" type="text" name="title" placeholder="Nhập tiêu đề">
              </div>
              
              <div class="form-group col-md-12">
                <label class="control-label">Nội dung</label>
                <textarea class="form-control" name="content" col="30" rows="10" placeholder="Nhập nội dung"></textarea>
              </div>
              
              <div class="form-group col-md-12">
                <label class="control-label">Hình ảnh</label>
                <input class="form-control" type="file" name="Hinhanh" id="fileToUpLoad">
              </div>
            
          </div>
          <button class="btn btn-save" type="submit" name="LuuLai" value="Lưu lại">Lưu lại</button>
          <a class="btn btn-cancel" href="index.php?act=qlsp">Hủy bỏ</a>
        </div>
            <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
    </form>
  </main>