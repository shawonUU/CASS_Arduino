<?php
include('dbcon.php');
session_start();


    function check($path){
        if(isset($_SESSION['currentUserId'])){
        
            $uid = $_SESSION['currentUserId'];
            $in_vlo = $database->getReference('IO/'.$uid.'/output'.'/'.$path)->getValue();
            
            return $in_vlo;
        }
    }
 
?>
