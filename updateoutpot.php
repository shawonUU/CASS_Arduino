<?php
session_start();
     include('dbcon.php');

    if(isset($_SESSION['currentUserId'], $_POST['name'],$_POST['code'],$_POST['ID'])){
        
        $uid = $_SESSION['currentUserId'];
        $vl = ['nickName' => $_POST['name'], 'setValue' => $_POST['code'],];
        $database->getReference('IO/'.$uid.'/output'.'/'.$_POST['ID'])->update($vl);

       echo "success";
    }
?>