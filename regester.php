


<script src="https://www.gstatic.com/firebasejs/9.6.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.6.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.6.1/firebase-analytics.js"></script>
<script src="firebase.js"></script>
<?php


/*
firebase.auth().signInWithEmailAndPassword(this.username, " ").catch(function(error) {
    if(error.code === "auth/wrong-password") {
        console.log("USER HAS AN ACCOUNT");
    } else if(error.code === "auth/user-not-found"){
        console.log("NEW USER");
    }
});
*/
    session_start();
    include('dbcon.php');
    if(isset($_POST['regester_button'])){
        $projectName = $_POST['project_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $conPassword = $_POST['password_confirmation'];

        

            $chk = 1;     
            if($projectName == null){
                //echo "come";
                $chk = 0;
                $_SESSION['project_name'] = "Enter project name.";
                header('Location: signup.php');
            }
            if($email==""){
                $chk = 0;
                $_SESSION['email'] = "Enter email address.";
                header('Location: signup.php');
            }
            else{
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $chk = 0;
                    $_SESSION['email'] = "Enter any valid email address.";
                    header('Location: signup.php');
                }
            }
            if($password==""){
                $chk = 0;
                $_SESSION['password'] = "Enter password.";
                header('Location: signup.php');
            }
            else{
                if($conPassword==""){
                    $chk = 0;
                    $_SESSION['con_password'] = "Enter password again.";
                    header('Location: signup.php');
                }
                else{
                    if($conPassword != $password){
                        $chk = 0;
                        $_SESSION['con_password'] = "These passwords are not same.";
                        header('Location: signup.php');
                    }
                }
            }
            

            if($chk == 1){
               // console.log("ok");

                $userProperties = [
                    'email' => $email,
                    'emailVerified' => false,
                    'password' => $password,
                    'projectName' => $projectName,
                    'disabled' => false,
                ];

                $users = $auth->listUsers();
                $mailIsUsed = false;
                foreach ($users as $user) {
                    if($user->email == $email){
                        $mailIsUsed = true; break;
                    }
                }
              
             
                if( $mailIsUsed == false){
                    $createdUser =$auth->createUser($userProperties);
                    $uid = $createdUser->uid;
                    $data = [
                            'projectName' => $projectName,
                            'email' => $email,
                            'password' => $password,
                            'uid' => $uid,
                    ];

                    $uid = $createdUser->uid;
                    $reference = $database->getReference('user/'.$uid)->update($data);


            




                    $I1 = [
                        'value' => '0',
                        'dtype' => '',
                        'dvlo' => '0',
                        'deget' => 'return digitalRead(I1);',
                        'getValue' => '',
                        'return' => 'I1v',
                        'dreturn' => '',
                        'display' => '',
                        'coustom' => '',
                        'name' => 'I1',
                        'active' => 'true',
                        'nickName' =>'',
                    ];
                    $I2 = [
                        'value' => '0',
                        'dtype' => '',
                        'dvlo' => '0',
                        'deget' => 'return digitalRead(I2);',
                        'getValue' => '',
                        'return' => 'I2v',
                        'dreturn' => '',
                        'display' => '',
                        'coustom' => '',
                        'name' => 'I2',
                        'active' => 'true',
                        'nickName' =>'',
                    ];
                    $I3 = [
                        'value' => '0',
                        'dtype' => '',
                        'dvlo' => '0',
                        'deget' => 'return digitalRead(I3);',
                        'getValue' => '',
                        'return' => 'I3v',
                        'dreturn' => '',
                        'display' => '',
                        'coustom' => '',
                        'name' => 'I3',
                        'active' => 'true',
                        'nickName' =>'',
                    ];
                    $I4 = [
                        'value' => '0',
                        'dtype' => '',
                        'dvlo' => '0',
                        'deget' => 'return digitalRead(I4);',
                        'getValue' => '',
                        'return' => 'I4v',
                        'dreturn' => '',
                        'display' => '',
                        'coustom' => '',
                        'name' => 'I4',
                        'active' => 'true',
                        'nickName' =>'',
                    ];
                    $I5 = [
                        'value' => '0',
                        'dtype' => '',
                        'dvlo' => '0',
                        'deget' => 'return digitalRead(I5);',
                        'getValue' => '',
                        'return' => 'I5v',
                        'dreturn' => '',
                        'display' => '',
                        'coustom' => '',
                        'name' => 'I5',
                        'active' => 'true',
                        'nickName' =>'',
                    ];
                    $I6 = [
                        'value' => '0',
                        'dtype' => '',
                        'dvlo' => '0',
                        'deget' => 'return digitalRead(I6);',
                        'getValue' => '',
                        'return' => 'I6v',
                        'dreturn' => '',
                        'display' => '',
                        'coustom' => '',
                        'name' => 'I6',
                        'active' => 'true',
                        'nickName' =>'',
                    ];


                    $AI1 = [
                        'value' => '0',
                        'dtype' => '',
                        'dvlo' => '0',
                        'deget' => 'return digitalRead(AI1);',
                        'getValue' => '',
                        'return' => 'AI1v',
                        'dreturn' => '',
                        'display' => '',
                        'coustom' => '',
                        'name' => 'AI1',
                        'active' => 'true',
                        'nickName' =>'',
                    ];
                    $AI2 = [
                        'value' => '0',
                        'dtype' => '',
                        'dvlo' => '0',
                        'deget' => 'return digitalRead(AI2);',
                        'getValue' => '',
                        'return' => 'AI2v',
                        'dreturn' => '',
                        'display' => '',
                        'coustom' => '',
                        'name' => 'AI2',
                        'active' => 'true',
                        'nickName' =>'',
                    ];
                    $AI3 = [
                        'value' => '0',
                        'dtype' => '',
                        'dvlo' => '0',
                        'deget' => 'return digitalRead(AI3);',
                        'getValue' => '',
                        'return' => 'AI3v',
                        'dreturn' => '',
                        'display' => '',
                        'coustom' => '',
                        'name' => 'AI3',
                        'active' => 'true',
                        'nickName' =>'',
                    ];


                    $input = [
                        'I1' => $I1,
                        'I2' => $I2,
                        'I3' => $I3,
                        'I4' => $I4,
                        'I5' => $I5,
                        'I6' => $I6,
                        'AI1' => $AI1,
                        'AI2' => $AI2,
                        'AI3' => $AI3,
                    ];


                    $O1 = [
                        'menual' => 'false',
                        'value' => 'off',
                        'dtype' => '',
                        'dvlo' => '0',
                        'dset' => 'digitalWrite(O1,LOW);',
                        'setValue' => '',
                        'name' => 'O1',
                        'active' => 'true',
                        'nickName' =>'',
                    ];
                    $O2 = [
                        'menual' => 'false',
                        'value' => 'off',
                        'dtype' => '',
                        'dvlo' => '0',
                        'dset' => 'digitalWrite(O2,LOW);',
                        'setValue' => '',
                        'name' => 'O2',
                        'active' => 'true',
                        'nickName' =>'',
                    ];
                    $O3 = [
                        'menual' => 'false',
                        'value' => 'off',
                        'dtype' => '',
                        'dvlo' => '0',
                        'dset' => 'digitalWrite(O3,LOW);',
                        'setValue' => '',
                        'name' => 'O3',
                        'active' => 'true',
                        'nickName' =>'',
                    ];
                    $O4 = [
                        'menual' => 'false',
                        'value' => 'off',
                        'dtype' => '',
                        'dvlo' => '0',
                        'dset' => 'digitalWrite(O4,LOW);',
                        'setValue' => '',
                        'name' => 'O4',
                        'active' => 'true',
                        'nickName' =>'',
                    ];
                    $O5 = [
                        'menual' => 'false',
                        'value' => 'off',
                        'dtype' => '',
                        'dvlo' => '0',
                        'dset' => 'digitalWrite(O5,LOW);',
                        'setValue' => '',
                        'name' => 'O5',
                        'active' => 'true',
                        'nickName' =>'',
                    ];
                    $O6 = [
                        'menual' => 'false',
                        'value' => 'off',
                        'dtype' => '',
                        'dvlo' => '0',
                        'dset' => 'digitalWrite(O6,LOW);',
                        'setValue' => '',
                        'name' => 'O6',
                        'active' => 'true',
                        'nickName' =>'',
                    ];


                    $AO1 = [
                        'menual' => 'false',
                        'value' => 'off',
                        'dtype' => '',
                        'dvlo' => '0',
                        'dset' => 'digitalWrite(AO1,LOW);',
                        'setValue' => '',
                        'name' => 'AO1',
                        'active' => 'true',
                        'nickName' =>'',
                    ];
                    $AO2 = [
                        'menual' => 'false',
                        'value' => 'off',
                        'dtype' => '',
                        'dvlo' => '0',
                        'dset' => 'digitalWrite(AO2,LOW);',
                        'setValue' => '',
                        'name' => 'AO2',
                        'active' => 'true',
                        'nickName' =>'',
                    ];
                    $AO3 = [
                        'menual' => 'false',
                        'value' => 'off',
                        'dtype' => '',
                        'dvlo' => '0',
                        'dset' => 'digitalWrite(AO3,LOW);',
                        'setValue' => '',
                        'name' => 'AO3',
                        'active' => 'true',
                        'nickName' =>'',
                    ];


                    $output = [
                        'O1' => $O1,
                        'O2' => $O2,
                        'O3' => $O3,
                        'O4' => $O4,
                        'O5' => $O5,
                        'O6' => $O6,
                        'AO1' => $AO1,
                        'AO2' => $AO2,
                        'AO3' => $AO3,
                    ];
                    $advance = [
                        'header' => '',
                        'setup' => '',
                        'gloval' => '',
                        'ssid' => '',
                        'pass' => '',
                    ];

                    $IO = [
                        'input' => $input,
                        'output' => $output,
                        'advance' => $advance,
                        'arduino' => 'off off off off off off off off off false false false false false false false false false 0 0 0 0 0 0 0 0 0 ',
                    ];
                   


                    $reference = $database->getReference('IO/'.$uid)->update($IO);



                    $auth->sendEmailVerificationLink($email);


                // $signinResult = $auth->signInWithEmailAndPassword($email, $password);
                    

                header('Location: noverify.php');
                    exit();
            }
            else{
                $_SESSION['email'] = "The Mail is already registered.";
                header('Location: signup.php');
            }
        }
    }
    else{
        header('Location: signup.php');
    }
?>