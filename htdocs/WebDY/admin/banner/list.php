<main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="index.php?act=listbn"><b>Danh sách banner</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <form action="index.php?act=listbn" method="post">
                        <div class="row element-button">
                           
                            <div class="col-sm-2">
                              <a class="btn btn-add btn-sm" href="index.php?act=addbn" title="Thêm"><i class="fas fa-plus"></i>
                                Tạo mới banner</a>
                            </div>
                        </div>
                          
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th width="10"><input type="checkbox" id="all"></th>
                                    <th>ID</th>
                                    <th>Tiêu đề</th>
                                    <th>Nội dung</th>
                                    <th>Hình ảnh</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($listbanner as $banner){
                                        extract($banner);
                                        $suabn="index.php?act=suabn&id=".$id;
                                        $xoabn="index.php?act=xoabn&id=".$id;
                                        $hinhpath="uploads/".$thumbnail;
                                        if(is_file($hinhpath)){
                                            $hinh="<img src='".$hinhpath."' height='70'>";
                                        }else{
                                            $hinh="nophoto";
                                        }
                                        echo '
                                        <tr>
                                        <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                        <td>'.$id.'</td>
                                        <td>'.$title.'</td>
                                        <td>'.$content.'</td>
                                        <td>'.$hinh.'</td>
                                        <td><a href="'.$xoabn.'"><button class="btn btn-primary btn-sm trash" type="button" value="Xóa"><i class="fas fa-trash-alt"></i></button></a>
                                            <a href="'.$suabn.'"><button class="btn btn-primary btn-sm edit" type="button" value="Sửa"><i class="fas fa-edit"></i></button></a>
                                        </td>
                                    </tr>';
                                    }
                                ?>
                            </tbody>
                        </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

