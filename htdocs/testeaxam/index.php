<?php
    include "model/pdo.php";
    include "view/header.php";
    if (isset($_GET['act'])&&($_GET['act']!=="")) {
        $act = $_GET['act'];
        switch ($act) {
            case 'listsp':
                $sql="select * from hoa order by maHoa desc";
                $listsp = pdo_query($sql);
                include "view/list.php";
                break;
            case 'addsp':
                if (isset($_POST['themmoi'])&&($_POST['themmoi'])) {
                    $tensp=$_POST['tensp'];
                    $file=$_FILES['hinhAnh']['name'];
                    $target_dir = "uploads/";
                    $target_file = $target_dir . basename($file);
                    move_uploaded_file($_FILES["hinhAnh"]["tmp_name"], $target_file);
                    $theloai=$_POST['theloai'];
                    $gia=$_POST['gia'];
                    $xuatxu=$_POST['xuatxu'];
                    $gioiTinh=$_POST['gioiTinh'];
                    $sql="insert into hoa(tenHoa, hinhAnh, theLoai, giaTien, xuatXu, gioiTinh) values('".$tensp."','".$file."','".$theloai."','".$gia."','".$xuatxu."','".$gioiTinh."')";
                    pdo_execute($sql);
                    $thongbao= "Thêm thành công!";
                }
                include "page/addsp.php";
                break;
            case 'xoasp':
                if(isset($_GET['maHoa'])&&($_GET['maHoa']>0)){
                    $sql="delete from hoa where maHoa=".$_GET['maHoa'];
                    pdo_execute($sql);
                }
                $sql="select * from hoa order by maHoa desc";
                $listsp = pdo_query($sql);
                include "view/list.php";
                break;
            case 'suasp':
                if(isset($_GET['maHoa'])&&($_GET['maHoa']>0)){
                    $sql="select * from hoa where mahoa=".$_GET['maHoa'];
                    $loadsp=pdo_query_one($sql);
                }
                include "page/editsp.php";
                break;
            case 'updatesp':
                if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                    $maHoa=$_POST['maHoa'];
                    $tenHoa=$_POST['tenHoa'];
                    $file=$_FILES['hinhAnh']['name'];
                    $target_dir = "uploads/";
                    $target_file = $target_dir . basename($file);
                    move_uploaded_file($_FILES["hinhAnh"]["tmp_name"], $target_file);
                    $theLoai=$_POST['theLoai'];
                    $giaTien=$_POST['giaTien'];
                    $xuatXu=$_POST['xuatXu'];
                    $gioiTinh=$_POST['gioiTinh'];
                    if($file!="")
                        $sql= "update hoa set  tenHoa='".$tenHoa."',hinhAnh='".$hinhAnh."',theLoai='".$theLoai."',giaTien='".$giaTien."',xuatXu = '".$xuatXu."', gioiTinh = '".$gioiTinh."' where maHoa=".$maHoa;
                    else
                        $sql= "update hoa set  tenHoa='".$tenHoa."',theLoai='".$theLoai."',giaTien='".$giaTien."',xuatXu = '".$xuatXu."', gioiTinh = '".$gioiTinh."' where maHoa=".$maHoa;
                    pdo_execute($sql);
                }
                $sql="select * from hoa order by maHoa desc";
                $listsp = pdo_query($sql);
                include "view/list.php";
                break;
            default:
                $sql="select * from hoa order by maHoa desc";
                $listsp = pdo_query($sql);
                include "view/list.php";
                break;
        }
    }else{
        $sql="select * from hoa order by maHoa desc";
        $listsp = pdo_query($sql);
        include "view/list.php";}
    include "view/footer.php";
?>