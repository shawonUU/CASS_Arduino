<?php
    session_start();
    include('header.php');
?>



				<div class="row ">
               
					<div class="p-4 p-sm-0 col-xs-12 col-sm-8 col-lg-6 col-sm-offset-2 col-lg-offset-3 mt-5">
						<div class="panel panel-default">
							<div class="panel-heading">
							    <h3 class="panel-title text-center text-white t-sdo">Project Registration</h3>
						    </div>

						    <div class="panel-body">
									
                                <form method="POST" action="regester.php">
            

                                            <div class="form-group row">


                                            <div class="col-md-6">
                                                    <input   type="text" class="m-2 sdo form-control" name="project_name" value="" required autocomplete="project_name" autofocus placeholder="Project Name">
                                                                    <!-- value="" required autocomplete="project_name" autofocus placeholder="Project Name" -->
                                                    
                                                        <?php
                                                            if(isset($_SESSION['project_name'])){
                                                               echo "<span class='inv-fed' style='width: 100%;margin-top: .25rem;font-size: .875em;color: #fff;' role='alert'><strong class='inv-fed'>".$_SESSION['project_name']."</strong></span>";
                                                                unset($_SESSION['project_name']);
                                                            }
                                                        ?>
                                                        
                                                
                                                </div>

                                                <div class="col-md-6">
                                                    <input  type="email" class="m-2 sdo form-control " name="email" value="" required autocomplete="email" placeholder="Email Address">

                                                
                                                    <?php
                                                            if(isset($_SESSION['email'])){
                                                               echo "<span class='' style='margin-left: 5px; width: 100%;margin-top: .25rem;font-size: .875em;color: #fff;'role='alert'>
                                                                    <strong>".$_SESSION['email']."</strong>
                                                                </span>";
                                                                unset($_SESSION['email']);
                                                            }
                                                        ?>
                                                
                                                </div>
                                            </div>



                                            <div class="form-group row ">

                                                <div class="col-md-6">
                                                    <input id="password" type="password" class="m-2 sdo form-control " name="password" required autocomplete="new-password" placeholder="Password">

                                                
                                                    <?php
                                                            if(isset($_SESSION['password'])){
                                                               echo "<span style='width: 100%;margin-top: .25rem;font-size: .875em;color: #fff;' class='' role='alert'>
                                                                    <strong>".$_SESSION['password']."</strong>
                                                                </span>";
                                                                unset($_SESSION['password']);
                                                            }
                                                        ?>
                                                
                                                </div>
                                        

                                                <div class="col-md-6">
                                                    <input id="password-confirm" type="password" class="m-2 sdo form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                                    <?php
                                                            if(isset($_SESSION['con_password'])){
                                                               echo "<span class='' style='width: 100%;margin-top: .25rem;font-size: .875em;color: #fff;' role='alert'><strong>".$_SESSION['con_password']."</strong></span>";
                                                                unset($_SESSION['con_password']);
                                                            }
                                                        ?>
                                                </div>

                                            </div>

                                            <!--<input type="submit" value="Register" class="btn btn-primary m-1 sdo btn-block">-->
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <button type="submit" name="regester_button" class="m-2 col-12 sdo btn btn-primary">
                                                        Regester Project
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="text-white text-center t-sdo">Already have an account? <a class="nav-link nlk t-sdo" href="signin.php">Login</a></p>
                    
                                        
                                </form>
						</div>
					</div>
				</div>
		

<?php
    include('foter.php');
?>
