<?php
//   session_start();
  require_once('config.php');
  $db = new Database();

// class start 
 class operation extends Database{
    // storge data
    public function Storge_Record(){
        global $db;
        if(isset($_POST['btn_save'])){
            // getting data
            $name = $db->check($_POST['name']);
            $ocupation = $db->check($_POST['occupation']);
            $company = $db->check($_POST['company']);
            $email = $db->check($_POST['email']);

            if($this->insert_record($name,$ocupation,$company,$email)){
                
                echo '<div class="alert alert-primary" role="alert">Data added sucessfully</div>';
            }
            else{
                echo '<div class="alert alert-danger" role="alert">faild to added data</div>';
            }
        }
    }

    // insert data
    public function insert_record($a,$b,$c,$d){
        global $db;
        $query = "INSERT INTO crud_storge(name,ocupation,company,email) VALUES('$a', '$b', '$c', '$d')";
        $result = mysqli_query($this->conn, $query);

        if($result){
            return true;
        }
        else{
            return false;
        }
    }

    // view data
    public function view_record(){
        global $db;
        $query = "SELECT * FROM crud_storge";
        $result = mysqli_query($db->conn, $query);
        return $result;
    }


    // get data 
    public function get_record($id){
        global $db;
        $query = "SELECT * FROM crud_storge WHERE id=$id";
        $result = mysqli_query($db->conn, $query);
        return $result;
    }

    // update record
    public function update(){
        global $db;
        if(isset($_POST['btn_update'])){
            $id = $db-check($_POST['id']);
            $name = $db->check($_POST['name']);
            $company = $db->check($_POST['company']);
            $ocupation = $db->check($_POST['occupation']);
            $email = $db->check($_POST['email']);

            if($this->update_record($id,$name,$ocupation,$company,$email)){
                $this->set_messsage('<div class="alert alert-success"> Your Record Has Been Updated : )</div>');
                header("location: view.php");
            }
            else{
                $this->set_messsage('<div class="alert alert-success"> Something Wrong : )</div>');
            }

            $sql = "UPDATE crud_storge set id='$id', name='$name', ocupation='$ocupation', email='$email' WHERE id=$id";

            $result = mysqli_query($db->conn,$sql);
            if($result){
                header('location: view.php');
                return $result;
            }
        }
    }
     // update record 2
    public function update_record($id,$name,$ocupation,$company,$email){
        global $db;
        $sql = "UPDATE crud_storge set id='$id', name='$name', ocupation='$ocupation', email='$email' WHERE id=$id";
        $result = mysqli_query($db->conn,$sql);
        if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
    }

    // session message
    public function set_message($msg){
        if(!empty($msg)){
            $_SESSION['Message'] = $msg;
        }
        else{
            $msg = '';
        }
    }

    // display session message
    public function display_message(){
        if(isset($_SESSION['Message'])){
            echo $_SESSION['Message'];
            unset($_SESSION['Message']);
        }
    }

    // delate record
    public function delate_record($id){
         global $db;
         $query = "DELETE FROM crud_storge WHERE id=$id";
         $result = mysqli_query($db->conn,$query);
         if($result)
            {
                return true;
                return $result;
            }
            else
            {
                return false;
            }
    }
 }

?>