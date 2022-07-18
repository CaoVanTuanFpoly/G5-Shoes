<?php
class Database {
    public function __construct()
    {
        
    }
    public function getDatabase($database = null) {
        if($database == null) {
            return new mysqli('localhost', 'root', '', 'g5shoes');
        } else return $database;
    }
}
?>