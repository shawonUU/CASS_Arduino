<?php
session_start();
     include('dbcon.php');

    if(isset($_SESSION['currentUserId'], $_POST['head'], $_POST['variabl'], $_POST['set'],  $_POST['ssid'],  $_POST['pass'])){
        
        $uid = $_SESSION['currentUserId'];
        $vl = ['header' => $_POST['head'], 'gloval' => $_POST['variabl'], 'setup' => $_POST['set'], 'ssid' => $_POST['ssid'], 'pass' => $_POST['pass']];
        $database->getReference('IO/'.$uid.'/advance')->update($vl);

       echo "success";
    }
?>