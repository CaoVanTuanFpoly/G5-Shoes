<?php
include '/Applications/XAMPP/xamppfiles/htdocs/G5-Shoes/Utils/Database.php';
include '/Applications/XAMPP/xamppfiles/htdocs/G5-Shoes/Model/DAO/UserDAO.php';

$email = isset($_POST['email']) ? $_POST['email'] : 'error';
$password = isset($_POST['password']) ? $_POST['password'] : 'error';


if(isset($_POST['login'])) {
    
}
?>