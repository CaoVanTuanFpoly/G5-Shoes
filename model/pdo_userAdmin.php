<?php
function show_user(){   
    $sql = "SELECT kh.maKH, kh.hoTen, kh.mail, kh.ngaySinh, kh.soDT, kh.isAdmin, kh.diaChi, kh.avata, kh.ngaysinh, ad.vaiTro FROM khachhang kh, admin ad 
    where ad.id = kh.isAdmin";
     return pdo_query($sql);
}
function show_userAd(){   
    $sql = "SELECT kh.maKH, kh.hoTen, kh.mail, kh.ngaySinh, kh.soDT, kh.isAdmin, kh.diaChi, kh.avata, kh.ngaysinh, ad.vaiTro FROM khachhang kh, admin ad 
    where ad.id = kh.isAdmin AND kh.isAdmin=1";
     return pdo_query($sql);
}

function show_Admin($email){
    $sql = "SELECT*FROM khachhang WHERE mail=?";
    return pdo_query($sql, $email);
}
function show_UserID($makh){
    $sql = "SELECT*FROM khachhang WHERE maKH=?";
    return pdo_query($sql, $makh);
}

//xoá user
function delete_user($maKH){
    $sql = "DELETE FROM khachhang WHERE maKH= ?";
    pdo_execute($sql, $maKH);
}

?>