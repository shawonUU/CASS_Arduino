<?php
session_start();
    include('header.php');
?>
<div class="row p-4 pt-3 p-sm-0">
<div class="container sdo bg-success mt-50 p-2 p-sm-4 col-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">

<div class="form-inline">

      <div class="form-group">
          <form method="POST" action="iogin.php">
          

            <div class="form-group row">

                            <div class="col-12">
                                <input id="email" type="email" class="m-2 form-control " name="email" value="" required autocomplete="email" autofocus placeholder="Email Adress">

                                
                                <?php
                                                            if(isset($_SESSION['mail'])){
                                                               echo "<span class='' style='width: 100%;margin-top: .25rem;font-size: .875em;color: #dc3545;'role='alert'>
                                                                    <strong>".$_SESSION['mail']."</strong>
                                                                </span>";
                                                                unset($_SESSION['mail']);
                                                            }
                                                        ?>
                               
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-12">
                                <input id="password" type="password" class="m-2 form-control " name="password" required autocomplete="current-password" placeholder="Password">
                                <?php
                                                            if(isset($_SESSION['password'])){
                                                               echo "<span class='' style='width: 100%;margin-top: .25rem;font-size: .875em;color: #dc3545;'role='alert'>
                                                                    <strong>".$_SESSION['password']."</strong>
                                                                </span>";
                                                                unset($_SESSION['password']);
                                                            }
                                                        ?>
                               
                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                              
                                        <div clas=" ">
                                        <a class="m-2 text-white nav-link d-inline" href="">
                                            Forgot Your Password?
                                        </a>
                                        </div>
                              
                                <div class="form-check m-2">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">

                                    <label class="text-white form-check-label" for="remember">
                                       Remember Me
                                    </label>
                                
                               
                                </div>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-12">
                                <button  type="submit" name="login_button" class="m-2 btn col-12 btn-primary">
                                    Login
                                </button>
                            </div>
                        </div>

             
              <a  href="signup.php"  class="nav-link d-inline text-white text-left t-sdo">Creat a new account.</a>
          </form>
      </div>
</div>
</div>
</div>

<?php
    include('foter.php');
?>