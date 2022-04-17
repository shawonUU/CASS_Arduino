<?php
    session_start();
    include('dbcon.php');
    if(isset($_POST['login_button'])){

        $email = $_POST['email'];
        $password = $_POST['password'];
        try{
           
                $user = $auth->getUserByEmail($email);

            
            try{
                $signinResult = $auth->signInWithEmailAndPassword($email, $password);

                 $idTokenString = $signinResult->idToken();

                try{

                    $verifyIdToken = $auth->verifyIdToken($idTokenString);
                    $uid = $verifyIdToken->Claims()->get('sub');
                    $user = $auth->getUser($uid);

                    $_SESSION['currentUserId'] = $uid;
                    $_SESSION['idTokenString'] = $idTokenString;
                    if($user->emailVerified == true){
                        header('Location: profile.php');
                        exit();
                    }
                    else{
                        header('Location: noverify.php');
                        exit();
                    }
                    exit();
                    
                }catch(Excption $e){
                    $_SESSION['password'] = "Wrong password.";
                    header('Location: signin.php');
                    exit();
                }
                

            }catch(Excption $e){
                
                echo '<script>document.write("come");</script>';
            }




        } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
            $_SESSION['mail'] = "No account with this mail.";
                header('Location: signin.php');
                exit();
        }catch (Excption $e) {
                echo '<h1>No internet</h1>';
                exit();
        }catch (FirebaseException $e) {
           echo '<script>document.write("Network error")</script>';

        }


    }
    else{
        header('Location: signin.php');
        exit();
    }

?>