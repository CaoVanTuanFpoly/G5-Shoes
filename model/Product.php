<?php
// tối nay code product: show sản phẩm: chuyển vào trang chi tiết
class Product {
    private $id;
    private $name;
    private $categoryId;
    private $avatar1;
    private $avatar2;
    private $avatar3;
    private $avatar4;
    private $price;
    private $description;
    public function __construct($id, $name, $categoryId, $avatar1, $avatar2, $avatar3, $avatar4, $price, $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->categoryId = $categoryId;
        $this->avatar1 = $avatar1;
        $this->avatar2 = $avatar2;
        $this->avatar3 = $avatar3;
        $this->avatar4 = $avatar4;
        $this->price = $price;
        $this->description = $description;
    }

    public function getID() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getCategoryID() {
        return $this->categoryId;
    }
    
    public function getAvatar1() {
        return $this->avatar1;
    }

    public function getAvatar2() {
        return $this->avatar2;
    }

    public function getAvatar3() {
        return $this->avatar3;
    }

    public function getAvatar4() {
        return $this->avatar4;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getDescription() {
        return $this->description;
    }

}

?>