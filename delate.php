<?php
   require_once('config.php');
   $db = new operation();
   
   if(isset($_GET['D_ID'])){
     
     $id = $_GET['D_ID'];
    if($db->delate_record($id)){
         $db->set_message('<div class="alert alert-success"> sucessfully delate: )</div>');
         header('location: view.php');
    }
    else{
        $db->set_message('<div class="alert alert-success"> Something Wrong : )</div>');
    }
   }
?>