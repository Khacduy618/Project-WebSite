<div class="container mt-4">
    <h1>Danh sách sản phẩm</h1>
    <form action="index.php?act=listsp" class="form-table">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Mã hoa</th>
                    <th>Tên hoa</th>
                    <th>Hình ảnh</th>
                    <th>Thể loại</th>
                    <th>Giá tiền</th>
                    <th>Xuất xứ</th>
                    <th>Giới tính</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($listsp as $sp) {
                        extract($sp);
                        if($gioiTinh == 0){
                            $gioTinhh = "Nam";
                        }else $gioTinhh = "Nữ";
                        $suasp='index.php?act=suasp&maHoa='.$maHoa;
                        $xoasp='index.php?act=xoasp&maHoa='.$maHoa;
                        $hinhpath="uploads/".$hinhAnh;
                        if(is_file($hinhpath)){
                            $hinh="<img src='".$hinhpath."' height='70'>";
                        }else{
                            $hinh="nophoto";
                        }?>
                 <tr>
                    <td><?=$maHoa?></td>
                    <td><?=$tenHoa?></td>
                    <td><?=$hinh?></td>
                    <td><?=$theLoai?></td>
                    <td><?=number_format($giaTien, 0, "", ".")?></td>
                    <td><?=$xuatXu?></td>
                    <td><?=$gioTinhh?></td>
                    <td>
                        <a href="<?=$suasp?>" class="btn btn-primary">Sửa</a>
                        <a href="<?=$xoasp?>" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </form>
    
</div>