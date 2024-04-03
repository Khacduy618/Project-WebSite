<?php
    if(!isset($_SESSION['mycart'])){$_SESSION['mycart']=[];}
    $error=false;
    $success=false;
    include "model/pdo.php";
    include "model/giohang.php";
    include "model/donhang.php";
    include "model/sanpham.php";
    include "model/danhmuc.php";
    include "model/nguoidung.php";
    include "model/trangthai.php";
    $menu=menu_home();
    $mn=menu_home1();
    $conn=pdo_get_connection();
    include "views/header.php";
    include "global.php";
    $dmsp=loadall_danhmuc_nb();
    $listdanhmuc=loadall_danhmuc();
    $spnew=loadall_sanpham_home_new(4);
    $spnb1=sanpham_danhmuc(10,30);
    $spnb2=sanpham_danhmuc(10,33);
    $spnb3=sanpham_danhmuc(10,51);
    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
            case 'log':
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    $user=trim($_POST['user']);
                    $pass=$_POST['pass'];
                    $passMd5=md5($pass);
                    $checkUser = load_one($user,$passMd5);
                    if (is_array($checkUser)) {
                        $_SESSION['user'] = $checkUser;
                        header('location: index.php');
                    }else {
                        $thongbao = "Tài khoản hoặc mật khẩu không chính xác. Vui lòng nhập lại!";
                    }
                    // if (is_array($checkUser)) {
                    //     $hashedPassword = $checkUser['pass'];
                    //     if (password_verify($pass, $hashedPassword)) {
                    //         $_SESSION['user'] = $checkUser;
                    //         header('location: index.php');
                    //         exit;
                    //     } else {
                    //         $thongbao = "Tài khoản hoặc mật khẩu không chính xác. Vui lòng nhập lại!";
                    //     }
                    // } else {
                    //     $thongbao = "Tài khoản hoặc mật khẩu không chính xác. Vui lòng nhập lại!";
                    // }
                }
                include "views/pages/log.php";
                break;
            case 'thoat':
                unset($_SESSION['role_id']);
                unset($_SESSION['MaND']);
                unset($_SESSION['user']);
                header('location: index.php');
                break;
            case 'reg':
                if(isset($_POST['dangky'])&&($_POST['dangky']))
                {
                    $name=$_POST['name'];
                    $email=$_POST['email'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $passMd5= md5($pass);
                    insert_nguoidung($name,$email,$user,$passMd5);
                    $thongbao = "Đăng ký thành công! Vui lòng đăng nhập!";
                }
                include "views/pages/reg.php";
                break;
            case 'prdetail':
                      if(isset($_GET['MaSP'])&&($_GET['MaSP']>0)){
                        $MaSP=$_GET['MaSP'];
                        $onepr=loadone_sanpham($MaSP);
                        $DM_ID=$onepr['DM_ID'];
                        $splienquan=loadall_sanpham_lienquan($DM_ID, $MaSP, 7);
                        include "views/pages/single.php";
                      }else{
                        include "views/home.php";
                      }
                    
                    break;
                default:
                    include "views/home.php";
                    break;
        }
    }else{
        include "views/home.php";
    }
    include "views/footer.php";
?>