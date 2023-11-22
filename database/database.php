<?php
class Database{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db_name = "inv_project";
    private $mysqli;

    public function __construct(){
        $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
        if($this->mysqli->connect_error){
           die("Database Connection Faild".$this->mysqli->connect_error);
        }

    }

    public function insert($table, $data=[], $join, $where, $orderBy, $limit){

    }

    public function __distruct(){
        $this->mysqli->close();
    }
}

