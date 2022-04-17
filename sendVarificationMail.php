<?php
    
    $auth->sendEmailVerificationLink($email);
    header('Location: sendVarificationMail.php');
    exit();
?>