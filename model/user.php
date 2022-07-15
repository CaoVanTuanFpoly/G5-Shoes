<?php
class User {
    private $id;
    private $role;
    private $name;
    private $dob;
    private $address;
    private $mail;
    private $phone;
    private $password;
    private $avatar;
    public function __construct($id, $role, $name, $dob, $address, $mail, $phone, $password, $avatar)
    {
        $this->id = $id;
        $this->role = $role;
        $this->name = $name;
        $this->dob = $dob;
        $this->address = $address;
        $this->mail = $mail;
        $this->phone = $phone;
        $this->password = $password;
        $this->avatar = $avatar;
    }

    public function getID() {
        return $this->id;
    }
    public function getRole() {
        return $this->role;
    }
    public function getName() {
        return $this->name;
    }
    public function getDOB() {
        return $this->dob;
    }
    public function getAddress() {
        return $this->address;
    }
    public function getMail() {
        return $this->mail;
    }
    public function getPhone() {
        return $this->phone;
    }
    public function getPassword() {
        return $this->password;
    }
}

?>