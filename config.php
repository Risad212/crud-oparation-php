<?php
  session_start();
  require_once('oparation.php'); 

class Database{
    public $conn;

    public function __construct(){
         $this->db_connect();
    }
    public function db_connect(){
        $this->conn = mysqli_connect('localhost', 'root', '','data_table');
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
          }else{
            echo "Connected successfully";
          }
    }

    public function check($a){
        $result = mysqli_real_escape_string($this->conn,$a);
        return $result;
    }
  }
  
?>