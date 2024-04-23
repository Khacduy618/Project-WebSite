<?php
    include "model/pdo.php";
    include "view/header.php";
    if (isset($_GET['act'])&&($_GET['act']!=="")) {
        $act = $_GET['act'];
        switch ($act) {
            case 'listTin':
                $sql="select * from tin order by maTin desc";
                $listTin = pdo_query($sql);
                include "view/list.php";
                break;
            case 'suaTin':
            if(isset($_GET['maTin'])&&($_GET['maTin']>0)){
                $sql="select * from tin where maTin=".$_GET['maTin'];
                $loadTin=pdo_query_one($sql);
            }
            include "pages/editTin.php";
            break;
            case 'updateTin':
                if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                    $maTin=$_POST['maTin'];
                    $tieuDe=$_POST['tieuDe'];
                    $file=$_FILES['hinhAnh']['name'];
                    $target_dir = "uploads/";
                    $target_file = $target_dir . basename($file);
                    move_uploaded_file($_FILES["hinhAnh"]["tmp_name"], $target_file);
                    $soLanXem=$_POST['soLanXem'];
                    $ngayDuaTin=$_POST['ngayDuaTin'];
                    $tomTat=$_POST['tomTat'];
                    if($file!="")
                        $sql= "update tin set  tieuDe='".$tieuDe."',hinhAnh='".$file."',soLanXem='".$soLanXem."',ngayDuaTin='".$ngayDuaTin."',tomTat = '".$tomTat."' where maTin=".$maTin;
                    else
                    $sql= "update tin set  tieuDe='".$tieuDe."',soLanXem='".$soLanXem."',ngayDuaTin='".$ngayDuaTin."',tomTat = '".$tomTat."' where maTin=".$maTin;
                    pdo_execute($sql);
                }
                $sql="select * from tin order by maTin desc";
                $listTin = pdo_query($sql);
                include "view/list.php";
                break;
            default:
                $sql="select * from tin order by maTin desc";
                $listTin = pdo_query($sql);
                include "view/list.php";
                break;
        }
    }else{
        $sql="select * from tin order by maTin desc";
        $listTin = pdo_query($sql);
        include "view/list.php";}
    include "view/footer.php";
?>