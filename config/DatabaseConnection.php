<?php 

class DatabaseConnection{
    private $db_conn;

    public function __construct(){
        $this->db_conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
        if($this->db_conn->connect_error){
            die("The Database Connection Faild".$this->db_conn->connect_error);
        }
    }

    public function getConnection(){
        return $this->db_conn;
    }
}