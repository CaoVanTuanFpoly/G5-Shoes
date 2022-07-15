<?php
ob_start();
class DATABASE
{
  private $host = 'localhost';
  private $dbname = 'duan1';
  private $username = 'root';
  private $password = '';
  public $conn = "";
  function __construct()
  {

    $this->conn = new PDO(
      'mysql:host=' . $this->host . ';dbname=' . $this->dbname,
      $this->username,
      $this->password,
      array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      )
    );
  }
  function query($sql)
  {
    $result = $this->conn->query($sql);
    return $result;
  }
  function queryOne($sql)
  {
    $result = $this->conn->query($sql);
    $row = $result->fetch();
    return $row;
  }
  function execute($sql)
  {
    $result = $this->conn->exec($sql);
    return $result;
  }
}
