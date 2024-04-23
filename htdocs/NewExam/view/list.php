<div class="container mt-4">
    <h1>Danh sách tin</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Mã tin</th>
                    <th>Tiêu đề</th>
                    <th>Hình ảnh</th>
                    <th>Số lần xem</th>
                    <th>Ngày đưa tin</th>
                    <th>Tóm tắt</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($listTin as $Tin) {
                        extract($Tin);
                        $suaTin='index.php?act=suaTin&maTin='.$maTin;
                        $hinhpath="uploads/".$hinhAnh;
                        if(is_file($hinhpath)){
                            $hinh="<img src='".$hinhpath."' height='70'>";
                        }else{
                            $hinh="nophoto";
                        }?>
                 <tr>
                    <td><?=$maTin?></td>
                    <td><?=$tieuDe?></td>
                    <td><?=$hinh?></td>
                    <td><?=$soLanXem?></td>
                    <td><?=$ngayDuaTin?></td>
                    <td><?=$tomTat?></td>
                    <td>
                        <a href="<?=$suaTin?>" class="btn btn-primary">Sửa</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>    
    
</div>