<?php

class Bill {
    private $billID;
    private $userID;
    private $productID;
    private $dateCreate;
    private $total;
    private $sizeID;

    public function __construct($billID, $userID, $productID, $dateCreate, $total, $sizeID)
    {
        $this->billID = $billID;
        $this->userID = $userID;
        $this->productID = $productID;
        $this->dateCreate = $dateCreate;
        $this->total = $total;
        $this->sizeID = $sizeID;
    }

    public function getBillID() {
        return $this->billID;
    }

    public function getUserIDFromBill() {
        return $this->userID;
    }

    public function getProductIDFromBill() {
       return $this->productID;
    }

    public function getDateCreate() {
        return $this->dateCreate;
    }

     public function getTotalFromBill() {
        return $this->total;
    }

    public function getSizeIDFromBill() {
        return $this->sizeID;
    }

}

?>