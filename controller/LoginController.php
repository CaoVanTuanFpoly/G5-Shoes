<?php
include 'C:\Xampp\htdocs\G5-Shoes\Utils\Database.php';
include 'C:\Xampp\htdocs\G5-Shoes\model\DAO\userDAO.php';


$userDAO = new UserDAO();
$email = isset($_POST['email']) ? $_POST['email'] : 'error';
$password = isset($_POST['password']) ? $_POST['password'] : 'error';

if(isset($_POST['login'])) {
    $user = $userDAO->getUserByMail($email) != false ? $userDAO->getUserByMail($email) : 'error';
    if($user->getPassword() == $password) {
        $_SESSION['user'] = $user->getID();
        
        echo 'success';
    } else echo 'co loi!';
}
?>