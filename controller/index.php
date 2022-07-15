<?php
session_start();
    include "../model/config.php";
    include "../model/product.php";
    include "../model/cart.php";
    include "../model/comment.php";
    include "../model/pdo_userAdmin.php";

    include "../view/header.php";
    if(isset($_GET['act'])){
    switch ($_GET['act']) {
        case 'cart':
            include "../view/cart.php";
            break;
        case 'sanpham':
            include "../view/sanpham.php";
            break;
        case 'profile':
                include "../view/profile.php";
                break;

        case 'login_regin':
                include "../view/login_regin.php";
            
            break;

        case 'register':

            include "../view/register.php";
            break;
        case 'chitietsp':
            include "../view/chitietsp.php";
            break;

        case 'seach':
                include "../model/seach.php";
                break;


        case 'baiviet':
            include "../view/baiviet.php";
            break;
            
        case 'logout':
            include "../view/logout.php";
            break;
            
        default:
            include "../view/home.php";
            break;
    }
} else {
    include "../view/home.php";
}
include "../view/footer.php";

?>