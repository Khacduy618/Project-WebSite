<?php
    session_start();
    ob_start();
    include "model/pdo.php";
    include "views/header.php";
    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
            case 'login':
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $checkuser=load_one($user,$pass);
                    if(is_array($checkuser)){
                        $_SESSION['user']=$checkuser;
                        header('location: index.php');
                    }else{
                        $thongbao="Tài khoản hoặc mật khẩu không chính xác. Vui lòng nhập lại!";
                    }
                    //  $kq=getuserinfo($user,$pass);
                    //  $role=$kq[0]['role_id'];
                    //  if($role==1){
                    //      $_SESSION['role_id']=$role;
                    //      header('location: admin/index.php');
                    //  }else{
                    //      $_SESSION['role_id']=$role;
                    //      $_SESSION['iduser']=$kq[0]['MaND'];
                    //      $_SESSION['user']=$kq[0]['user'];
                    //      header('location: index.php');
                    }
                    
                include "views/pages/log.php";
                break;
            case 'thoat':
                unset($_SESSION['role_id']);
                unset($_SESSION['iduser']);
                unset($_SESSION['user']);
                header('location: index.php');
                break;
            case 'reg':
                if(isset($_POST['dangky'])&&($_POST['dangky']))
                {
                    $name=$_POST['name'];
                    $user=$_POST['user'];
                    $email=$_POST['email'];
                    $pass=$_POST['pass'];
                    insert_nguoidung($name,$user,$email,$pass);
                    $thongbao="Đăng ký thành công! Vui lòng đăng nhập!";

                }
                include "views/pages/reg.php";
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