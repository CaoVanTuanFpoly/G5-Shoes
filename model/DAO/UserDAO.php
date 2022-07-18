<?php 
include 'C:\Xampp\htdocs\G5-Shoes\model\User.php';
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
            $query = $this->database->prepare('SELECT * FROM `user` WHERE `user`.`userID` = ?');
            $query->bind_param('s', $id);

            if($query->execute()) {
                $result = $query->get_result();
                if($result->num_rows > 0) {
                    $user = $result->fetch_assoc();
                    return new User($user['userID'], $user['email'], $user['fullName'], $user['gender'], $user['birthday'], $user['address'], $user['phoneNumber'], $user['password'], $user['avata'], $user['levelID']);
                } else return false;
            } else return false;
        }
    }
    public function getUserByMail($mail) {
        if($this->database->connect_error) {
            return false;
        } else {
            $query = $this->database->prepare('SELECT * FROM `user` WHERE `user`.`userID` = ?');
            $query->bind_param('s', $mail);

            if($query->execute()) {
                $result = $query->get_result();
                if($result->num_rows > 0) {
                    $user = $result->fetch_assoc();
                    return new User($user['userID'], $user['email'], $user['fullName'], $user['gender'], $user['birthday'], $user['address'], $user['phoneNumber'], $user['password'], $user['avata'], $user['levelID']);
                } else return false;
            } else return false;
        }
    }
    public function getAllUsers() {
        
    }
}

?>