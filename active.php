<?php
session_start();
include('dbcon.php');
    $un = $_POST['text'];


    if(isset($_SESSION['currentUserId'])){
        
            $uid = $_SESSION['currentUserId'];

            $in_vlo = $database->getReference('IO/'.$uid.$un.'/active')->getValue();

            $sv_vlo = $in_vlo;
            if($in_vlo=='true'){
                $sv_vlo = 'false';
            }else{
                $sv_vlo = 'true';
            }


            $vl = [
                'active' => $sv_vlo,
            ];

            $database->getReference('IO/'.$uid.$un)->update($vl);
    }   
?>