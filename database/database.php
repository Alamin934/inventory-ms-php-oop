<?php
date_default_timezone_set("Asia/Dhaka");
class Database{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db_name = "inv_project";
    private $mysqli;
    private $result = [];

    public function __construct(){
        $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
        if($this->mysqli->connect_error){
           die("Database Connection Faild".$this->mysqli->connect_error);
        }
        // echo "connected";
    }

    public function insert($table, $data=[]){
        if($this->tableExists($table)){
            $tableKeys = implode(" , ", array_keys($data));
            $tableValues = implode("' , '", $data);
            $sql = "INSERT INTO $table($tableKeys) VALUES('$tableValues')";
            if($this->mysqli->query($sql)){
                array_push($this->result, $this->mysqli->insert_id);
            }else{
                array_push($this->result, $this->mysqli->error);
            }
        }
    }

    public function update($table, $data=[],$where = null){
        if($this->tableExists($table)){
            foreach($data as $key=>$value){
                $sql = "UPDATE $table SET $key = '$value'";
                if($where != null){
                    $sql.= " WHERE $where";
                }
                if($this->mysqli->query($sql)){
                    array_push($this->result, $this->mysqli->affected_rows);
                }else{
                    array_push($this->result, $this->mysqli->error);
                }
            }
        }
    }

    public function select($table, $row="*", $join=null, $where=null, $orderBy=null, $limit=null){
        if($this->tableExists($table)){
            $sql = "SELECT $row FROM $table";
            if($join != null){
                $sql.= " JOIN $join";
            }
            if($where != null){
                $sql.= " WHERE $where";
            }
            if($orderBy != null){
                $sql.= " ORDER BY $orderBy";
            }
            if($limit != null){
                $sql.= " LIMIT 0, $limit";
            }
            $query = $this->mysqli->query($sql);
            if($query){
                $this->result = $query->fetch_all(MYSQLI_ASSOC);
                return true;
            }else{
                array_push($this->result, $this->mysqli->error);
                return false;
            }
        }
    }

    private function tableExists($table){
        $sql = "SHOW TABLES FROM $this->db_name LIKE '$table'";
        $tableInDb = $this->mysqli->query($sql);
        if($tableInDb){
            if($tableInDb->num_rows == 1){
                return true;
            }else{
                array_push($this->result, $table." doesn't exists in this DB");
                return false;
            }
        }
    }

    public function escapeString($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = $this->mysqli->real_escape_string($data);
        return $data;
    }

    public function get_result(){
        $message = $this->result;
        $this->result = [];
        return $message;
    }

    public function __distruct(){
        $this->mysqli->close();
    }
}

