<?php 
    session_start();
    include_once('../Utils/Database.php');
    include_once('../model/DAO/BillDAO.php');

    $billDAO = new BillDAO();
    $userID;
    if (isset($_SESSION['userID'])) {
        $userID = (int)$_SESSION['userID'];
    }
    else {
        $userID = null;
    }

    $listData = json_decode($_POST['list-data']);
    
    foreach ($listData as $datas) {
        $productID = $datas[0];
        $priceProduct = $datas[1];
        $sizeProductId = $datas[2];
        $billDAO->addBill($userID, $productID, $priceProduct, $sizeProductId);
        header('Refresh: 0; ../view/template/message.html');
    }
    
?>

