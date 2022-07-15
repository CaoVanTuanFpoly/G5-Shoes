<?php
// gọi lại file database 
require_once 'database.php';
class login extends DATABASE
{
    // gọi lại function construct
    public function __construct()
    {
        parent::__construct();
    }
    // Hàm check user
    public function getInfoEmail($mail)
    {
        $sql = "SELECT * FROM `khachhang` WHERE `mail` = '$mail'";
        return $this->queryOne($sql);
    }
    public function checkForm($mail, $soDT)
    {
        $sql = "SELECT mail , soDT FROM khachhang WHERE mail = '$mail'  OR soDT = '$soDT' ";
        return $this->queryOne($sql);
    }

    public function register($hoTen, $ngaySinh, $email, $soDT, $password, $diaChi)
    {
        $isAdmin = 2;
        $sql = "INSERT INTO `khachhang` (hoTen,ngaySinh,mail,soDT,password,diaChi,isAdmin) VALUE ('$hoTen','$ngaySinh','$email','$soDT','$password','$diaChi','$isAdmin')";
        return $this->execute($sql);
    }
}
?>
