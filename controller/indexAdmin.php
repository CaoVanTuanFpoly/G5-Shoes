<?php
session_start();
include "../model/config.php";
include "../model/product.php";
include "../model/pdo_userAdmin.php";

    $act = null;
    if (isset($_GET['act']) == true) {
        $act = $_GET['act'];
    }
    switch($act){
        case 'admin':
            include "../view/indexAdmin.php";
            break;
    }
?>