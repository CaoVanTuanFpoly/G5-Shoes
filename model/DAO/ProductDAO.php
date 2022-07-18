<?php
    include('C:\Xampp\htdocs\G5-Shoes\model\Product.php');

    class ProductDAO {
        private $database;

        public function __construct() {
            $this->database = new Database();
            $this->database = $this->database->getDatabase();
        }

        // lấy tất cả product
        public function getAllProduct() {
            if ($this->database->connect_error) {
                return false;
            } else {
                $query = $this->database->prepare('SELECT * FROM `product`');
                
                if ($query->execute()) {
                    $result = $query->get_result();
                    if ($result->num_rows > 0) {
                        $products = [];
                        while ($row = $result->fetch_assoc()) {
                            $product = new Product($row['productID'], $row['name'], $row['categoryID'], $row['img1'], $row['img2'], $row['img3'], $row['img4'], $row['charge'],  $row['description']);
                            $products[] = $product;
                        }
                        return $products;
                    } else {
                        return false;
                    }
                } else {
                    return false;
                }
            }
        }

        // lấy product qua id
        public function getProductById($id) {
            if ($this->database->connect_error) {
                return false;
            } else {
                $query = $this->database->prepare('SELECT * FROM `product` WHERE `product`.`productID` = ?');
                $query->bind_param('s', $id);

                if ($query->execute()) {
                    $result = $query->get_result();
                    if ($result->num_row > 0) {
                        $product = $result->fetch_assoc();
                        return new Product($row['productID'], $row['name'], $row['categoryID'], $row['img1'], $row['img2'], $row['img3'], $row['img4'], $row['charge'],  $row['description']);
                    } else {
                        return false;
                    }
                } else {
                    return false;
                }
            }
        }

    }
?>
