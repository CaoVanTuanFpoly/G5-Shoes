<?php
    include('C:\Xampp\htdocs\G5-Shoes\Model\Product.php');

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
                            $product = new Product($row['productID'], $row['name'], $row['categoryID'], $row['sizeID'], $row['img1'], $row['img2'], $row['img3'], $row['img4'], $row['charge'],  $row['description']);
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
                    if ($result->num_rows > 0) {
                        $product = $result->fetch_assoc();
                        return new Product($product['productID'], $product['name'], $product['categoryID'], $product['sizeID'], $product['img1'], $product['img2'], $product['img3'], $product['img4'], $product['charge'], $product['description']);
                    } else {
                        return false;
                    }
                } else {
                    return false;
                }
            }
        }

        // lấy 4 hoặc nhiều product mới nhất

        public function getProductByArgument($argument = 4) {
            if ($this->database->connect_error) {
                return false;
            } 
            else {
                $query = $this->database->prepare("SELECT * FROM `product` ORDER BY `productID` DESC LIMIT $argument");


                if ($query->execute()) {
                    $result = $query->get_result();

                    if ($result->num_rows > 0) {
                        $fourProducts = [];
                        while ($row = $result->fetch_assoc()) {
                            $fourProduct = new Product($row['productID'], $row['name'], $row['categoryID'], $row['sizeID'], $row['img1'], $row['img2'], $row['img3'], $row['img4'], $row['charge'], $row['description']);
                            $fourProducts[] = $fourProduct;
                        }
                        return $fourProducts;
                    } else {
                        return false;
                    }
                }
                else {
                    return false;
                }
            }
        }


        // lấy id product khi url bị phá
        public function getNewestProduct() {
            if ($this->database->connect_error) {
                return false;
            }
            else {
                $query = $this->database->prepare("SELECT * FROM `product` ORDER BY `product`.`productID` DESC LiMIT 1");

                if ($query->execute()) {
                    $result = $query->get_result();

                    if ($result->num_rows > 0) {
                        $defaultProductID = $result->fetch_assoc();
                        return new Product($defaultProductID['productID'], $defaultProductID['name'], $defaultProductID['categoryID'], $defaultProductID['sizeID'], $defaultProductID['img1'], $defaultProductID['img2'], $defaultProductID['img3'], $defaultProductID['img4'], $defaultProductID['charge'], $defaultProductID['description']);
                    }
                    else {
                        return false;
                    }
                }
                else {
                    return false;
                }
            }
        }

    }
?>
