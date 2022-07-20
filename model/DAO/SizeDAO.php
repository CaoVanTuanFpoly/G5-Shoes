<?php
    include('C:\Xampp\htdocs\G5-Shoes\Model\Size.php');

    class SizeDAO {
        private $database;

        public function __construct() {
            $this->database = new Database();
            $this->database = $this->database->getDatabase();
        }


        public function getAllSize() {
            if ($this->database->connect_error) {
                return false;
            } else {
                $query = $this->database->prepare("SELECT * FROM `size`");

                if ($query->execute()) {
                    $result = $query->get_result();
                    if ($result->num_rows > 0) {
                        $sizes = [];
                        while ($row = $result->fetch_assoc()) {
                            $size = new Size($row['sizeID'], $row['size'], $row['sizeAmount']);
                            $sizes[] = $size;
                        }
                        return $sizes;
                    } else {
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
