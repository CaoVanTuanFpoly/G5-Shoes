<?php
    include('C:\Xampp\htdocs\G5-Shoes\Model\Bill.php');

    class BillDAO {
        private $database;

        public function __construct() {
            $this->database = new Database();
            $this->database = $this->database->getDatabase();
        }


        public function getAllBill() {
            if ($this->database->connect_error) {
                return false;
            } else {
                $query = $this->database->prepare("SELECT * FROM `bill`");

                if ($query->execute()) {
                    $result = $query->get_result();
                    if ($result->num_rows > 0) {
                        $bills = [];
                        while ($row = $result->fetch_assoc()) {
                            $bill = new Size($row['billID'], $row['userID'], $row['productID'], $row['dateCreate'], $row['total'], $row['sizeID']);
                            $bills[] = $bill;
                        }
                        return $bills;
                    } else {
                        return false;
                    }
                }
                else {
                    return false;
                }
            }
        }


        public function addBill($userID, $productID, $total, $sizeID) {
            if($this->database->connect_error) {
                return false;
            } else {
                $query = $this->database->prepare('INSERT INTO `bill` (userID , productID, total , sizeID) 
                VALUES (?,?,?,?)');
                $query->bind_param('ssss',$userID, $productID, $total, $sizeID);
                $query->execute();
            }
        }
    }       
?>
