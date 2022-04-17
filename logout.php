<?php
    if(isset($_POST['logout_button'])){
        unset($_SESSION['currentUserId']);
        unset($_SESSION['idTokenString']);
        header('Location: signin.php');
        exit();
    }
    else{
        header('Location: index.php');
    }

?>