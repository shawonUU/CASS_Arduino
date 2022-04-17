
<?php
    include('profileHeader.php');
    $reference = $database->getReference('IO/'.$_SESSION['currentUserId']);

    $snapshot = $reference->getSnapshot();
    $IO = $reference->getValue();


    $vlo = "";
    $item = 1;
     for($i=0; $i<strlen($IO['arduino']); $i++){
        if($IO['arduino'][$i] == ' '){
           
            if($item == 1){$IO['output']['O1']['value'] = $vlo;}
            else if($item == 2){$IO['output']['O2']['value'] = $vlo;}
            else if($item == 3){$IO['output']['O3']['value'] = $vlo;}
            else if($item == 4){$IO['output']['O4']['value'] = $vlo;}
            else if($item == 5){$IO['output']['O5']['value'] = $vlo;}
            else if($item == 6){$IO['output']['O6']['value'] = $vlo;}
            else if($item == 7){$IO['output']['AO1']['value'] = $vlo;}
            else if($item == 8){$IO['output']['AO2']['value'] = $vlo;}
            else if($item == 9){$IO['output']['AO3']['value'] = $vlo;}

            else if($item == 10){$IO['output']['O1']['menual'] = $vlo;}
            else if($item == 11){$IO['output']['O2']['menual'] = $vlo;}
            else if($item == 12){$IO['output']['O3']['menual'] = $vlo;}
            else if($item == 13){$IO['output']['O4']['menual'] = $vlo;}
            else if($item == 14){$IO['output']['O5']['menual'] = $vlo;}
            else if($item == 15){$IO['output']['O6']['menual'] = $vlo;}
            else if($item == 16){$IO['output']['AO1']['menual'] = $vlo;}
            else if($item == 17){$IO['output']['AO2']['menual'] = $vlo;}
            else if($item == 18){$IO['output']['AO3']['menual'] = $vlo;}

            
            else if($item == 19){$IO['input']['I1']['value'] = $vlo;}
            else if($item == 20){$IO['input']['I2']['value'] = $vlo;}
            else if($item == 21){$IO['input']['I3']['value'] = $vlo;}
            else if($item == 22){$IO['input']['I4']['value'] = $vlo;}
            else if($item == 23){$IO['input']['I5']['value'] = $vlo;}
            else if($item == 24){$IO['input']['I6']['value'] = $vlo;}
            else if($item == 25){$IO['input']['AI1']['value'] = $vlo;}
            else if($item == 26){$IO['input']['AI2']['value'] = $vlo;}
            else if($item == 27){$IO['input']['AI3']['value'] = $vlo;}
            

            $item++;$vlo = "";

            continue;
        }
        $vlo .= $IO['arduino'][$i];
     }
?>


<section class="" style="background-color: #4B515D;">


        <div class="row p-2 p-md-5 d-flex justify-content-center"> 


                        <div class="my-2 col-6 col-md-4 col-lg-2" <?php echo ($IO['output']['O1']['active'] =='false' ? 'hidden' : '');?>>
                            <div class="cardd py-3 sdo bg-primary text-white" >
                              <div class="card-body ">

                                    <p class="text-center">
                                      <?php try{echo $IO['output']['O1']['name'];} catch(Excption $e){echo 'Loading..'; }?>
                                    </p>
                                    <p ID="O1_v" class=" text-center text-white mb-0 font-weight-bold">
                                      <?php try{echo $IO['output']['O1']['value'];} catch(Excption $e){echo 'Loading..'; } ?>
                                    </p>

                                      <form action="menual.php" method="post">

                                        <div class="row pt-2">
                                            <div class=" col-4 col-sm-4 ">
                                                <input id="O1" onclick="menual('O1')" type="checkbox" style="margin-left: 5px; height: 18px; width: 18px;" <?php echo ($IO['output']['O1']['menual'] =='true' ? 'checked' : '');?>> 
                                            </div>
                                            
                                            <div class="col-8 col-sm-4 mt-1" >
                                                <label class="switch">
                        
                                                    <input id="O1AI" onclick="onof('O1')" type="checkbox" class="" <?php echo ($IO['output']['O1']['value'] == 'on' ? 'checked ' : '');  echo ($IO['output']['O1']['menual'] =='false' ? 'disabled' : '');?>>
                                                    <span class="slider round"></span>
                                                </label>

                                            </div>

                                            <div class="px-3 px-sm-0 px-lg-3 col-12 col-sm-4 col-lg-12 m-auto" style="display: flex;justify-content: center;">
                                              
                                                  <a type="button" href="viewOutput.php?id=O1" class="col-12 btn btn-success" style="margin: 0 auto;" value="">View</a>
                                                
                                            </div>

                                        </div>
                                      </form>

                              </div>
                            </div>
                        </div>



                        <div class="my-2 col-6 col-md-4 col-lg-2" <?php echo ($IO['output']['O2']['active'] =='false' ? 'hidden' : '');?>>
                            <div class="cardd py-3 sdo bg-primary text-white" >
                              <div class="card-body" >

                                    <p class="text-center">
                                      <?php try{echo $IO['output']['O2']['name'];} catch(Excption $e){echo 'Loading..'; }?>
                                    </p>
                                    <p ID="O2_v" class=" text-center text-white mb-0 font-weight-bold">
                                      <?php try{echo $IO['output']['O2']['value'];} catch(Excption $e){echo 'Loading..'; } ?>
                                    </p>

                                      <form action="menual.php" method="post">

                                        <div class="row pt-2">
                                            <div class=" col-4 col-sm-4 ">
                                            
                                                <input id="O2" onclick="menual('O2')" type="checkbox" style="margin-left: 5px; height: 18px; width: 18px;" <?php echo ($IO['output']['O2']['menual'] =='true' ? 'checked' : '');?>>
                                              
                                            </div>
                                            <div class="col-8 col-sm-4 mt-1" >
                                                <label class="switch">
                                                    <input id="O2AI" onclick="onof('O2')" type="checkbox" class="" <?php echo ($IO['output']['O2']['value'] == 'on' ? 'checked ' : '');  echo ($IO['output']['O2']['menual'] =='false' ? 'disabled' : '');?>>
                                                    <span class="slider round"></span>
                                                </label>

                                            </div>

                                            <div class="px-3 px-sm-0 px-lg-3 col-12 col-sm-4 col-lg-12 m-auto" style="display: flex;justify-content: center;">
                                                  <a href="viewOutput.php?id=O2" type="button" class="col-12 btn btn-success" style="margin: 0 auto;" value="">View</a>   
                                            </div>
                                        </div>
                                      </form>
                              </div>
                            </div>
                        </div>





                        <div class="my-2 col-6 col-md-4 col-lg-2" <?php echo ($IO['output']['O3']['active'] =='false' ? 'hidden' : '');?>>
                            <div class="cardd py-3 sdo bg-primary text-white" >
                              <div class="card-body ">

                                    <p class="text-center">
                                      <?php try{echo $IO['output']['O3']['name'];} catch(Excption $e){echo 'Loading..'; }?>
                                    </p>
                                    <p ID="O3_v" class=" text-center text-white mb-0 font-weight-bold">
                                      <?php try{echo $IO['output']['O3']['value'];} catch(Excption $e){echo 'Loading..'; } ?>
                                    </p>

                                      <form action="menual.php" method="post">

                                        <div class="row pt-2">
                                            <div class=" col-4 col-sm-4 ">
                                            
                                                <input id="O3" onclick="menual('O3')" type="checkbox" style="margin-left: 5px; height: 18px; width: 18px;" <?php echo ($IO['output']['O3']['menual'] =='true' ? 'checked' : '');?>>
                                              
                                            </div>
                                            <div class="col-8 col-sm-4 mt-1" >
                                                <label class="switch">
                        
                                                    <input id="O3AI" onclick="onof('O3')" type="checkbox" class="" <?php echo ($IO['output']['O3']['value'] == 'on' ? 'checked ' : '');  echo ($IO['output']['O3']['menual'] =='false' ? 'disabled' : '');?>>
                                                    <span class="slider round"></span>
                                                </label>

                                            </div>

                                            <div class="px-3 px-sm-0 px-lg-3 col-12 col-sm-4 col-lg-12 m-auto" style="display: flex;justify-content: center;">
                                              
                                                  <a href="viewOutput.php?id=O3" type="button" class="col-12 btn btn-success" style="margin: 0 auto;" value="">View</a>
                                                
                                            </div>

                                        </div>
                                      </form>

                              </div>
                            </div>
                        </div>





                        <div class="my-2 col-6 col-md-4 col-lg-2" <?php echo ($IO['output']['O4']['active'] =='false' ? 'hidden' : '');?>>
                            <div class="cardd py-3 sdo bg-primary text-white" >
                              <div class="card-body ">

                                    <p class="text-center">
                                      <?php try{echo $IO['output']['O4']['name'];} catch(Excption $e){echo 'Loading..'; }?>
                                    </p>
                                    <p ID="O4_v" class=" text-center text-white mb-0 font-weight-bold">
                                      <?php try{echo $IO['output']['O4']['value'];} catch(Excption $e){echo 'Loading..'; } ?>
                                    </p>

                                      <form action="menual.php" method="post">

                                        <div class="row pt-2">
                                            <div class=" col-4 col-sm-4 ">
                                            
                                                <input id="O4" onclick="menual('O4')" type="checkbox" style="margin-left: 5px; height: 18px; width: 18px;" <?php echo ($IO['output']['O4']['menual'] =='true' ? 'checked' : '');?>>
                                              
                                            </div>
                                            <div class="col-8 col-sm-4 mt-1" >
                                                <label class="switch">
                        
                                                    <input id="O4AI" onclick="onof('O4')" type="checkbox" class="" <?php echo ($IO['output']['O4']['value'] == 'on' ? 'checked ' : '');  echo ($IO['output']['O4']['menual'] =='false' ? 'disabled' : '');?>>
                                                    <span class="slider round"></span>
                                                </label>

                                            </div>

                                            <div class="px-3 px-sm-0 px-lg-3 col-12 col-sm-4 col-lg-12 m-auto" style="display: flex;justify-content: center;">
                                              
                                                  <a href="viewOutput.php?id=O4" type="button" class="col-12 btn btn-success" style="margin: 0 auto;" value="">View</a>
                                                
                                            </div>

                                        </div>
                                      </form>

                              </div>
                            </div>
                        </div>


                        <div class="my-2 col-6 col-md-4 col-lg-2" <?php echo ($IO['output']['O5']['active'] =='false' ? 'hidden' : '');?>>
                            <div class="cardd py-3 sdo bg-primary text-white" >
                              <div class="card-body ">

                                    <p class="text-center">
                                      <?php try{echo $IO['output']['O5']['name'];} catch(Excption $e){echo 'Loading..'; }?>
                                    </p>
                                    <p ID="O5_v" class=" text-center text-white mb-0 font-weight-bold">
                                      <?php try{echo $IO['output']['O5']['value'];} catch(Excption $e){echo 'Loading..'; } ?>
                                    </p>

                                      <form action="menual.php" method="post">

                                        <div class="row pt-2">
                                            <div class=" col-4 col-sm-4 ">
                                            
                                                <input id="O5" onclick="menual('O5')" type="checkbox" style="margin-left: 5px; height: 18px; width: 18px;" <?php echo ($IO['output']['O5']['menual'] =='true' ? 'checked' : '');?>>
                                              
                                            </div>
                                            <div class="col-8 col-sm-4 mt-1" >
                                                <label class="switch">
                        
                                                    <input id="O5AI" onclick="onof('O5')" type="checkbox" class="" <?php echo ($IO['output']['O5']['value'] == 'on' ? 'checked ' : '');  echo ($IO['output']['O5']['menual'] =='false' ? 'disabled' : '');?>>
                                                    <span class="slider round"></span>
                                                </label>

                                            </div>

                                            <div class="px-3 px-sm-0 px-lg-3 col-12 col-sm-4 col-lg-12 m-auto" style="display: flex;justify-content: center;">
                                              
                                                  <a href="viewOutput.php?id=O5" type="button" class="col-12 btn btn-success" style="margin: 0 auto;" value="">View</a>
                                                
                                            </div>

                                        </div>
                                      </form>

                              </div>
                            </div>
                        </div>


                        <div class="my-2 col-6 col-md-4 col-lg-2" <?php echo ($IO['output']['O6']['active'] =='false' ? 'hidden' : '');?>>
                            <div class="cardd py-3 sdo bg-primary text-white" >
                              <div class="card-body ">

                                    <p class="text-center">
                                      <?php try{echo $IO['output']['O6']['name'];} catch(Excption $e){echo 'Loading..'; }?>
                                    </p>
                                    <p ID="O6_v" class=" text-center text-white mb-0 font-weight-bold">
                                      <?php try{echo $IO['output']['O6']['value'];} catch(Excption $e){echo 'Loading..'; } ?>
                                    </p>

                                      <form action="menual.php" method="post">

                                        <div class="row pt-2">
                                            <div class=" col-4 col-sm-4 ">
                                            
                                                <input id="O6" onclick="menual('O6')" type="checkbox" style="margin-left: 5px; height: 18px; width: 18px;" <?php echo ($IO['output']['O6']['menual'] =='true' ? 'checked' : '');?>>
                                              
                                            </div>
                                            <div class="col-8 col-sm-4 mt-1" >
                                                <label class="switch">
                        
                                                    <input id="O6AI" onclick="onof('O6')" type="checkbox" class="" <?php echo ($IO['output']['O6']['value'] == 'on' ? 'checked ' : '');  echo ($IO['output']['O6']['menual'] =='false' ? 'disabled' : '');?>>
                                                    <span class="slider round"></span>
                                                </label>

                                            </div>

                                            <div class="px-3 px-sm-0 px-lg-3 col-12 col-sm-4 col-lg-12 m-auto" style="display: flex;justify-content: center;">
                                              
                                                  <a href="viewOutput.php?id=O6" type="button" class="col-12 btn btn-success" style="margin: 0 auto;" value="">View</a>
                                                
                                            </div>

                                        </div>
                                      </form>

                              </div>
                            </div>
                        </div>

                          
        </div>




        <div class="row p-2 p-md-5 d-flex justify-content-center d-none"> 


                        <div class="my-2 col-6 col-md-4 col-lg-2" <?php echo ($IO['output']['AO1']['active'] =='false' ? 'hidden' : '');?>>
                            <div class="cardd py-3 sdo bg-primary text-white" >
                              <div class="card-body ">

                                    <p class="text-center">
                                      <?php try{echo $IO['output']['AO1']['name'];} catch(Excption $e){echo 'Loading..'; }?>
                                    </p>
                                    <p ID="AO1_v" class=" text-center text-white mb-0 font-weight-bold">
                                      <?php try{echo $IO['output']['AO1']['value'];} catch(Excption $e){echo 'Loading..'; } ?>
                                    </p>

                                      <form action="menual.php" method="post">

                                        <div class="row pt-2">
                                            <div class=" col-4 col-sm-4 ">
                                            
                                                <input id="AO1" onclick="menual('AO1')" type="checkbox" style="margin-left: 5px; height: 18px; width: 18px;" <?php echo ($IO['output']['AO1']['menual'] =='true' ? 'checked' : '');?>>
                                              
                                            </div>
                                            <div class="col-8 col-sm-4 mt-1" >
                                                <label class="switch">
                        
                                                    <input id="AO1AI" onclick="onof('AO1')" type="checkbox" class="" <?php echo ($IO['output']['AO1']['value'] == 'on' ? 'checked ' : '');  echo ($IO['output']['AO1']['menual'] =='false' ? 'disabled' : '');?>>
                                                    <span class="slider round"></span>
                                                </label>

                                            </div>

                                            <div class="px-3 px-sm-0 px-lg-3 col-12 col-sm-4 col-lg-12 m-auto" style="display: flex;justify-content: center;">
                                              
                                                  <a href="viewOutput.php?id=AO1" type="button" class="col-12 btn btn-success" style="margin: 0 auto;" value="">View</a>
                                                
                                            </div>

                                        </div>
                                      </form>

                              </div>
                            </div>
                        </div>



                        <div class="my-2 col-6 col-md-4 col-lg-2" <?php echo ($IO['output']['AO2']['active'] =='false' ? 'hidden' : '');?>>
                            <div class="cardd py-3 sdo bg-primary text-white" >
                              <div class="card-body ">

                                    <p class="text-center">
                                      <?php try{echo $IO['output']['AO2']['name'];} catch(Excption $e){echo 'Loading..'; }?>
                                    </p>
                                    <p ID="AO2_v" class=" text-center text-white mb-0 font-weight-bold">
                                      <?php try{echo $IO['output']['AO2']['value'];} catch(Excption $e){echo 'Loading..'; } ?>
                                    </p>

                                      <form action="menual.php" method="post">

                                        <div class="row pt-2">
                                            <div class=" col-4 col-sm-4 ">
                                            
                                                <input id="AO2" onclick="menual('AO2')" type="checkbox" style="margin-left: 5px; height: 18px; width: 18px;" <?php echo ($IO['output']['AO2']['menual'] =='true' ? 'checked' : '');?>>
                                              
                                            </div>
                                            <div class="col-8 col-sm-4 mt-1" >
                                                <label class="switch">
                        
                                                    <input id="AO2AI" onclick="onof('AO2')" type="checkbox" class="" <?php echo ($IO['output']['AO2']['value'] == 'on' ? 'checked ' : '');  echo ($IO['output']['AO2']['menual'] =='false' ? 'disabled' : '');?>>
                                                    <span class="slider round"></span>
                                                </label>

                                            </div>

                                            <div class="px-3 px-sm-0 px-lg-3 col-12 col-sm-4 col-lg-12 m-auto" style="display: flex;justify-content: center;">
                                              
                                                  <a href="viewOutput.php?id=AO2" type="button" class="col-12 btn btn-success" style="margin: 0 auto;" value="">View</a>
                                                
                                            </div>

                                        </div>
                                      </form>

                              </div>
                            </div>
                        </div>





                        <div class="my-2 col-6 col-md-4 col-lg-2" <?php echo ($IO['output']['AO3']['active'] =='false' ? 'hidden' : '');?>>
                            <div class="cardd py-3 sdo bg-primary text-white" >
                              <div class="card-body ">

                                    <p class="text-center">
                                      <?php try{echo $IO['output']['AO3']['name'];} catch(Excption $e){echo 'Loading..'; }?>
                                    </p>
                                    <p ID="AO3_v" class=" text-center text-white mb-0 font-weight-bold">
                                      <?php try{echo $IO['output']['AO3']['value'];} catch(Excption $e){echo 'Loading..'; } ?>
                                    </p>

                                      <form action="menual.php" method="post">

                                        <div class="row pt-2">
                                            <div class=" col-4 col-sm-4 ">
                                            
                                                <input id="AO3" onclick="menual('AO3')" type="checkbox" style="margin-left: 5px; height: 18px; width: 18px;" <?php echo ($IO['output']['AO3']['menual'] =='true' ? 'checked' : '');?>>
                                              
                                            </div>
                                            <div class="col-8 col-sm-4 mt-1" >
                                                <label class="switch">
                        
                                                    <input id="AO3AI" onclick="onof('AO3')" type="checkbox" class="" <?php echo ($IO['output']['AO3']['value'] == 'on' ? 'checked ' : '');  echo ($IO['output']['AO3']['menual'] =='false' ? 'disabled' : '');?>>
                                                    <span class="slider round"></span>
                                                </label>

                                            </div>

                                            <div class="px-3 px-sm-0 px-lg-3 col-12 col-sm-4 col-lg-12 m-auto" style="display: flex;justify-content: center;">
                                              
                                                  <a href="viewOutput.php?id=AO3" type="button" class="col-12 btn btn-success" style="margin: 0 auto;" value="">View</a>
                                                
                                            </div>

                                        </div>
                                      </form>

                              </div>
                            </div>
                        </div>
        </div>

























                    <div class="row p-2 p-md-5 d-flex justify-content-center h-100"> <!-- align-items-center -->



                          <div class="my-2 col-6 col-md-4 col-lg-2" <?php echo ($IO['input']['I1']['active'] =='false' ? 'hidden' : '');?>>
                            <div class="cardd py-3 sdo bg-success text-white" >
                              <div class="card-body ">

                                  <p class="text-center"><?php 
                                      try{
                                        echo $IO['input']['I1']['name'];
                                      }
                                      catch(Excption $e){
                                        echo 'Loading..';
                                      }
                                      
                                  ?></p>

                                  <p id="I1_v" class=" text-center text-white mb-0 font-weight-bold"><?php echo $IO['input']['I1']['value'];?></p>
                                  <div class="px-3 px-sm-0 px-lg-3 col-12 col-sm-4 col-lg-12 mt-3 m-auto" style="display: flex;justify-content: center;">
                                                
                                       <a href="viewInput.php?id=I1" type="button" class="col-12 btn btn-primary" style="margin: 0 auto;" >View</a>
                                              
                                  </div>
                              </div>
                            </div>
                          </div>









                          <div class="my-2 col-6 col-md-4 col-lg-2" <?php echo ($IO['input']['I2']['active'] =='false' ? 'hidden' : '');?>>
                            <div class="cardd py-3 sdo bg-success text-white" >
                              <div class="card-body ">

                              <p class="text-center"><?php 
                                      try{
                                        echo $IO['input']['I2']['name'];
                                      }
                                      catch(Excption $e){
                                        echo 'Loading..';
                                      }
                                      
                                  ?></p>

                                  <p id="I2_v" class=" text-center text-white mb-0 font-weight-bold"><?php echo $IO['input']['I2']['value'];?></p>
                                  <div class="px-3 px-sm-0 px-lg-3 mt-3 col-12  col-sm-4 col-lg-12 m-auto" style="display: flex;justify-content: center;">
                                                
                                  <a href="viewInput.php?id=I2" type="button" class="col-12 btn btn-primary" style="margin: 0 auto;" >View</a>                                              
                                            </div>
                              </div>
                            </div>
                          </div>









                          <div class="my-2 col-6 col-md-4 col-lg-2" <?php echo ($IO['input']['I3']['active'] =='false' ? 'hidden' : '');?>>
                            <div class="cardd py-3 sdo bg-success text-white" >
                              <div class="card-body ">

                              <p class="text-center"><?php 
                                      try{
                                        echo $IO['input']['I3']['name'];
                                      }
                                      catch(Excption $e){
                                        echo 'Loading..';
                                      }
                                      
                                  ?></p>

                                  <p id="I3_v" class=" text-center text-white mb-0 font-weight-bold"><?php echo $IO['input']['I3']['value'];?></p>
                                  <div class="px-3 px-sm-0 px-lg-3 mt-3 col-12 col-sm-4 col-lg-12 m-auto" style="display: flex;justify-content: center;">
                                                
                                  <a href="viewInput.php?id=I3" type="button" class="col-12 btn btn-primary" style="margin: 0 auto;" >View</a>                                              
                                            </div>
                              </div>
                            </div>
                          </div>








                          <div class="my-2 col-6 col-md-4 col-lg-2" <?php echo ($IO['input']['I4']['active'] =='false' ? 'hidden' : '');?>>
                            <div class="cardd py-3 sdo bg-success text-white" >
                              <div class="card-body ">

                              <p class="text-center"><?php 
                                      try{
                                        echo $IO['input']['I4']['name'];
                                      }
                                      catch(Excption $e){
                                        echo 'Loading..';
                                      }
                                      
                                  ?></p>

                                  <p id="I4_v" class=" text-center text-white mb-0 font-weight-bold"><?php echo $IO['input']['I4']['value'];?></p>
                                  <div class="px-3 px-sm-0 px-lg-3 mt-3 col-12 col-sm-4 col-lg-12 m-auto" style="display: flex;justify-content: center;">
                                                
                                  <a href="viewInput.php?id=I4" type="button" class="col-12 btn btn-primary" style="margin: 0 auto;" >View</a>                                              
                                            </div>
                              </div>
                            </div>
                          </div>









                          <div class="my-2 col-6 col-md-4 col-lg-2" <?php echo ($IO['input']['I5']['active'] =='false' ? 'hidden' : '');?>>
                            <div class="cardd py-3 sdo bg-success text-white" >
                              <div class="card-body ">

                              <p class="text-center"><?php 
                                      try{
                                        echo $IO['input']['I5']['name'];
                                      }
                                      catch(Excption $e){
                                        echo 'Loading..';
                                      }
                                      
                                  ?></p>

                                  <p id="I5_v" class=" text-center text-white mb-0 font-weight-bold"><?php echo $IO['input']['I5']['value'];?></p>
                                  <div  class="px-3 px-sm-0 px-lg-3 mt-3 col-12 col-sm-4 col-lg-12 m-auto" style="display: flex;justify-content: center;">
                                                
                                  <a href="viewInput.php?id=I5" type="button" class="col-12 btn btn-primary" style="margin: 0 auto;" >View</a>                                              
                                            </div>
                              </div>
                            </div>
                          </div>







                          <div class="my-2 col-6 col-md-4 col-lg-2" <?php echo ($IO['input']['I6']['active'] =='false' ? 'hidden' : '');?>>
                            <div class="cardd py-3 sdo bg-success text-white" >
                              <div class="card-body ">

                              <p class="text-center"><?php 
                                      try{
                                        echo $IO['input']['I6']['name'];
                                      }
                                      catch(Excption $e){
                                        echo 'Loading..';
                                      }
                                      
                                  ?></p>

                                  <p id="I6_v" class=" text-center text-white mb-0 font-weight-bold"><?php echo $IO['input']['I6']['value'];?></p>

                                  <div class="px-3 px-sm-0 px-lg-3 mt-3 col-12 col-sm-4 col-lg-12 m-auto" style="display: flex;justify-content: center;">
                                                
                                  <a href="viewInput.php?id=I6" type="button" class="col-12 btn btn-primary" style="margin: 0 auto;" >View</a>                                                
                                              </div>

                              </div>
                            </div>
                          </div>

                    </div>


                    <div class="row p-2 p-md-5 d-flex justify-content-center h-100 d-none"> <!-- align-items-center -->


                          <div class="my-2 col-6 col-md-4 col-lg-2" <?php echo ($IO['input']['AI1']['active'] =='false' ? 'hidden' : '');?>>
                          <div class="cardd py-3 sdo bg-success text-white" >
                          <div class="card-body ">

                          <p class="text-center"><?php 
                                      try{
                                        echo $IO['input']['AI1']['name'];
                                      }
                                      catch(Excption $e){
                                        echo 'Loading..';
                                      }
                                      
                                  ?></p>

                          <p id="AI1_v"class=" text-center text-white mb-0 font-weight-bold"><?php echo $IO['input']['AI1']['value'];?></p>
                          <div class="px-3 px-sm-0 px-lg-3 col-12 col-sm-4 col-lg-12 mt-3 m-auto" style="display: flex;justify-content: center;">
                                    
                          <a href="viewInput.php?id=AI1" type="button" class="col-12 btn btn-primary" style="margin: 0 auto;" >View</a>                                  
                                </div>
                          </div>
                          </div>
                          </div>







                          <div class="my-2 col-6 col-md-4 col-lg-2" <?php echo ($IO['input']['AI2']['active'] =='false' ? 'hidden' : '');?>>
                          <div class="cardd py-3 sdo bg-success text-white" >
                          <div class="card-body ">

                          <p class="text-center"><?php 
                                      try{
                                        echo $IO['input']['AI2']['name'];
                                      }
                                      catch(Excption $e){
                                        echo 'Loading..';
                                      }
                                      
                                  ?></p>

                          <p id="AI2_v"class=" text-center text-white mb-0 font-weight-bold"><?php echo $IO['input']['AI2']['value'];?></p>
                          <div class="px-3 px-sm-0 px-lg-3 mt-3 col-12  col-sm-4 col-lg-12 m-auto" style="display: flex;justify-content: center;">
                                    
                          <a href="viewInput.php?id=AI2" type="button" class="col-12 btn btn-primary" style="margin: 0 auto;" >View</a>                                </div>
                          </div>
                          </div>
                          </div>








                          <div class="my-2 col-6 col-md-4 col-lg-2" <?php echo ($IO['input']['AI3']['active'] =='false' ? 'hidden' : '');?>>
                            <div class="cardd py-3 sdo bg-success text-white" >
                              <div class="card-body ">

                                <p class="text-center"><?php 
                                            try{
                                              echo $IO['input']['AI3']['name'];
                                            }
                                            catch(Excption $e){
                                              echo 'Loading..';
                                            }
                                            
                                        ?></p>

                                <p id="AI3_v"class=" text-center text-white mb-0 font-weight-bold"><?php echo $IO['input']['AI3']['value'];?></p>
                                <div class="px-3 px-sm-0 px-lg-3 mt-3 col-12 col-sm-4 col-lg-12 m-auto" style="display: flex;justify-content: center;">
                                          
                                <a href="viewInput.php?id=AI3" type="button" class="col-12 btn btn-primary" style="margin: 0 auto;" >View</a>                                        
                                </div>
                              </div>
                            </div>
                          </div>

         </div>

</section>



<script>
  (function () {
        document.getElementById('dashbord').style.display = 'none';
  })();
</script>
<script>
    function menual(id){
     
     $.ajax({
        method: "POST",
        url: "menual.php",
        data: { text: id }
      });
      var AI = id.concat("AI");
      
      if(document.getElementById(id).checked){
        document.getElementById(AI).disabled = false;
      }
      else{
        document.getElementById(AI).disabled = true;
      } 

    }
    </script>
    
    <script>
    function onof(id){
      var ID = id.concat("AI");
      var NF = id.concat("_v");
      var vlo = null;
      if(document.getElementById(ID).checked){
        vlo = "on";
      }else{vlo = "off";}
      document.getElementById(NF).innerHTML = vlo;
      $.ajax({
        method: "POST",
        url: "onoff.php",
        data: { 
          id: id ,
          value: vlo
        }
      });
    }
</script>

<script>
  $(document).ready(function(){
       setInterval(function(){work();refresh();}, 4000)
    });

</script>

<!-- <script>
  function getAnSet(){
    $.get("getAnSet.php", function(myData){
      work();
      var IO = JSON.parse(myData);
      console.log(IO);
    });
  }
</script> -->


<script>
  function work(){

      $.get("autoLoad.php", function(myData){
        var IO = JSON.parse(myData);

        if(IO.output.O1.menual == 'false'){
          $("#O1_v").text(IO.output.O1.value);
          if(IO.output.O1.value == 'on'){
            document.getElementById('O1AI').checked = true;
          }else{document.getElementById('O1AI').checked = false; }
        }
        if(IO.output.O2.menual == 'false'){
          $("#O2_v").text(IO.output.O2.value);
          if(IO.output.O2.value == 'on'){
            document.getElementById('O2AI').checked = true;
          }else{document.getElementById('O2AI').checked = false; }
        }
        if(IO.output.O3.menual == 'false'){
          $("#O3_v").text(IO.output.O3.value);
          if(IO.output.O3.value == 'on'){
            document.getElementById('O3AI').checked = true;
          }else{document.getElementById('O3AI').checked = false; }
        }
        if(IO.output.O4.menual == 'false'){
          $("#O4_v").text(IO.output.O4.value);
          if(IO.output.O4.value == 'on'){
            document.getElementById('O4AI').checked = true;
          }else{document.getElementById('O4AI').checked = false; }
        }
        if(IO.output.O5.menual == 'false'){
          $("#O5_v").text(IO.output.O5.value);
          if(IO.output.O5.value == 'on'){
            document.getElementById('O5AI').checked = true;
          }else{document.getElementById('O5AI').checked = false; }
        }
        if(IO.output.O6.menual == 'false'){
          $("#O6_v").text(IO.output.O6.value);
          if(IO.output.O6.value == 'on'){
            document.getElementById('O6AI').checked = true;
          }else{document.getElementById('O6AI').checked = false; }
        }
        if(IO.output.AO1.menual == 'false'){
          $("#AO1_v").text(IO.output.AO1.value);
          if(IO.output.AO1.value == 'on'){
            document.getElementById('AO1AI').checked = true;
          }else{document.getElementById('AO1AI').checked = false; }
        }
        if(IO.output.AO2.menual == 'false'){
          $("#AO2_v").text(IO.output.AO2.value);
          if(IO.output.AO2.value == 'on'){
            document.getElementById('AO2AI').checked = true;
          }else{document.getElementById('AO2AI').checked = false; }
        }
        if(IO.output.AO3.menual == 'false'){
          $("#AO3_v").text(IO.output.AO3.value);
          if(IO.output.AO3.value == 'on'){
            document.getElementById('AO3AI').checked = true;
          }else{document.getElementById('AO3AI').checked = false; }
        }

        $("#I1_v").text(IO.input.I1.value);
        $("#I2_v").text(IO.input.I2.value);
        $("#I3_v").text(IO.input.I3.value);
        $("#I4_v").text(IO.input.I4.value);
        $("#I5_v").text(IO.input.I5.value);
        $("#I6_v").text(IO.input.I6.value);
        $("#AI1_v").text(IO.input.AI1.value);
        $("#AI2_v").text(IO.input.AI2.value);
        $("#AI3_v").text(IO.input.AI3.value);

      });
  }
</script>


<script>
  function customizeOutput(id){
    
    $.ajax({
    type: "POST",
    url: "viewOutput.php",
    data: id,
    success: function(r)
      {
        window.location.href = 'viewOutput.php';
        //$("#div").html(r); Useless since you're redirecting.
      },
    });
    

  }
</script>

<?php
  include('foter.php');
?>
