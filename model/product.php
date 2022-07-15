<?php

function sanpham_showAll(){
    $sql = "SELECT sp.maSP, sp.tenSP, sp.maLoai, sp.hinh, sp.giaTien, sp.mota, loaisp.tenLoai FROM sanpham sp, loaisanpham loaisp 
    where loaisp.maLoai = sp.maLoai";
    return pdo_query($sql);
}

function sanpham_showId($maSP){
    $sql="SELECT*From sanpham Where maSP=?";
    return pdo_query($sql, $maSP);
}
function sanpham_new(){
    $sql = "SELECT * FROM sanpham  ORDER BY maSP DESC limit 4";
    return pdo_query($sql);
}

function sanpham_hot(){
    $sql = "SELECT * FROM sanpham  ORDER BY maSP ASC limit 4";
    return pdo_query($sql);
}

function sanpham_special(){
    $sql = "SELECT * FROM sanpham  ORDER BY maSP<10 ASC limit 4";
    return pdo_query($sql);
}
?>