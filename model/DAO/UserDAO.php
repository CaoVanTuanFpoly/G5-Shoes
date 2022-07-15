<?php 
include '/Applications/XAMPP/xamppfiles/htdocs/G5-Shoes/Model/User.php';
class UserDAO {
    private $database;
    public function __construct() {
        $this->database = new Database();
        $this->database = $this->database->getDatabase();
    }

    public function getUserByID($id) {
        if($this->database->connect_error) {
            return false;
        } else {
            $query = $this->database->prepare('SELECT * FROM `khachhang` WHERE `khachhang`.`maKH` = ?');
            $query->bind_param('s', $id);

            if($query->execute()) {
                $result = $query->get_result();
                if($result->num_rows > 0) {
                    $user = $result->fetch_assoc();
                    return new User($user['maKH'], $user['isAdmin'], $user['hoTen'], $user['ngaySinh'], $user['diaChi'], $user['mail'], $user['soDT'], $user['password'], $user['avata']);
                } else return false;
            } else return false;
        }
    }
    public function getUserByMail($mail) {
        if($this->database->connect_error) {
            return false;
        } else {
            $query = $this->database->prepare('SELECT * FROM `khachhang` WHERE `khachhang`.`mail` = ?');
            $query->bind_param('s', $mail);

            if($query->execute()) {
                $result = $query->get_result();
                if($result->num_rows > 0) {
                    $user = $result->fetch_assoc();
                    return new User($user['maKH'], $user['isAdmin'], $user['hoTen'], $user['ngaySinh'], $user['diaChi'], $user['mail'], $user['soDT'], $user['password'], $user['avata']);
                } else return false;
            } else return false;
        }
    }
}

?>