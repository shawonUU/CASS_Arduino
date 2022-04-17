<?php
session_start();
     include('dbcon.php');

    if(isset($_SESSION['currentUserId'], $_POST['name'],$_POST['custom_code'],$_POST['input_code'],$_POST['ID'],$_POST['dsply'],$_POST['retrn'])){
        
        $uid = $_SESSION['currentUserId'];
        $vl = ['nickName' => $_POST['name'], 'coustom' => $_POST['custom_code'], 'getValue' => $_POST['input_code'],'display' => $_POST['dsply'],'dreturn' => $_POST['retrn'],];
        $database->getReference('IO/'.$uid.'/input'.'/'.$_POST['ID'])->update($vl);

       echo "Success";
       
    }
    
?>