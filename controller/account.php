<?php
include_once("../model/database.php");
include_once("../model/user.php");


session_start();
// gọi model login tương tác 
$auth = new login();
$act = null;
if (isset($_GET['act']) == true) {
    $act = $_GET['act'];
}
// xử lí switch case 
switch ($act) {
    case 'form':
        include "../view/header.php";
        require_once '../view/login_regin.php';
        include "../view/footer.php";
        break;

    case 'register':
        include "../view/header.php";
        if (isset($_POST['dangky']) == true) {
            // tạo ra biến mảng erro 
            $erro = [];
            // lấy dữ liệu
            $hoTen = $_POST['name'];
            $ngaySinh = $_POST['date'];
            $email = $_POST['email'];
            $soDT = $_POST['phone'];
            $pass = $_POST['password'];
            $repassword = $_POST['repassword'];
            $diaChi = $_POST['diachi'];
            // $paSS = md5($pass);
            $password = md5($pass);

            if (empty($hoTen) || empty($ngaySinh) || empty($email) || empty($soDT) || empty($pass) || empty($repassword) || empty($diaChi)) {
                $erroRegin['hoTen'] = "Bạn chưa nhập tên!";
                $erroRegin['ngaySinh'] = "Bạn chưa nhập ngày sinh!";
                $erroRegin['email'] = "Bạn chưa nhập email!";
                $erroRegin['soDT'] = "Bạn chưa nhập số điện thoại!";
                $erroRegin['pass'] = "Bạn chưa nhập mật khẩu!";
                $erroRegin['repassword'] = "Bạn chưa nhập mật khẩu!";
                $erroRegin['diaChi'] = "Bạn chưa nhập địa chỉ!";
            } else if (!preg_match("/^[^\d+]*[\d+]{0}[^\d+]*$/", $hoTen)) {
                $erro['validateName'] = "Họ tên không hợp lệ!";
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $erro['validateEmail'] = "Email không hợp lệ!";
            } else if (!preg_match("/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im", $soDT)) {
                $erro['validatePhone'] = "Số điện thoại không hợp lệ!";
            } else {
                $info = $auth->checkForm($email, $soDT);
                if ($email == $info['mail']) {
                    $erroRegister['emptypMail'] = "Email đã được đăng kí!";
                } else if ($soDT == $info['soDT']) {
                    $erroRegister['emptypSoDt'] = "Số điện thoại đã được đăng kí!";
                } else if ($pass === $repassword) {
                    $result = $auth->register($hoTen, $ngaySinh, $email, $soDT, $password, $diaChi);
                    echo '<script language="javascript">alert("Đăng ký thành công!")</script>';
                    header('Refresh: 0.5; account.php?act=form');
                } else {
                    $erroRegister['emptypPASS'] = "Mật khẩu không trùng khớp!";
                }
            }
        }
        require_once '../view/login_regin.php';
        include "../view/footer.php";
        break;
    case 'login':
        include "../view/header.php";
        if (isset($_POST['login'])) {
            $erroLogin = [];
            $email = $_POST['email'];
            $pass = $_POST['password'];

            $password = md5($pass);

            // Xử lý thông tin 
            if (empty($email) || empty($password)) {
                $erroLogin['email'] = "Bạn chưa nhập email!";
                $erroLogin['Pass'] = "Bạn chưa nhập mật khẩu!";
            } else {
                $info = $auth->getInfoEmail($email);
                if (!$info) {
                    $erroLogin['emptyMail'] = "Không tồn tại email!";
                } else if ($password != $info['password']) {
                    $erroLogin['emptypass'] = "Mật khẩu không đúng!";
                } else {
                    $_SESSION['maKH'] = $info['maKH'];
                    $_SESSION['email'] = $info['mail'];
                    $_SESSION['name'] = $info['hoTen'];
                    $_SESSION['isAdmin'] = $info['isAdmin'];
                    $_SESSION['avata'] = $info['avata'];
                    $_SESSION['diaChi'] = $info['diaChi'];
                    echo '<script language="javascript">alert("Đăng nhập thành công!")</script>';
                    header('Refresh: 0.5; index.php?profile');
                }
            }
        }
        require_once '../view/login_regin.php';
        include "../view/footer.php";
        break;
    case 'logout':
        session_destroy();
        header('Refresh: 0; index.php?home');
        break;


    default:
        # code...
        break;

}
