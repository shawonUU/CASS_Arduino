<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    

  <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> 


-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link href="css/mystyle.css" rel="stylesheet" crossorigin="anonymous">
    <title>CASS Arduino</title>
</head>
<body style="font: inherit !important; background-color: #212529">
<?php
    include('dbcon.php');
    session_start();
?>


<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page">
            <?php 
              try{
                echo($database->getReference('user/'.$_SESSION['currentUserId'].'/projectName')->getValue());
                
              } catch(Excption $e){
                
              } catch (FirebaseException $e) {
                
              }
            ?>
          </a>
        </li>
      </ul>
      <a href="generate.php" type="button" class="btn text-white m-2 btn btn-primary" id="genarate" >Generate</a>
      <a href="profile.php" type="button" class="btn text-white m-2 btn btn-primary" id="dashbord" >Dashbord</a>
      <form method="POST" action="logout.php">
      <button  type="submit" name="logout_button" class="nav-link text-white m-2 btn d-block btn-primary">
                                    Logout
                                </button>
      <form method="POST" action="iogin.php">
    </div>
  </div>
</nav>