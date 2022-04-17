<?php
    include('profileHeader.php');
   $reference = $database->getReference('IO/'.$_SESSION['currentUserId']);

   $snapshot = $reference->getSnapshot();
   $IO = $reference->getValue();
?>
<div class=" p-5 pt-2 text-white  ">


        <div class="row">
            <div class="d-flex justify-content-end mb-3"><a href="code.php"   class="btn btn-primary " >Generate Code</a></div>
            <div class="col-12 col-lg-4">

                <div class="d-inline-flex">
                    <div class="col px-3">
                            <h4>Output ports</h4>
                            <div class="form-check">
                            <input onclick="menual('/output/O1')" class="form-check-input" type="checkbox" value="" id="flexCheckDefault" <?php echo ($IO['output']['O1']['active'] =='true' ? 'checked' : '');?>>
                            <label  class="form-check-label" for="flexCheckDefault">
                                <?php echo $IO['output']['O1']['name'].($IO['output']['O1']['nickName'] != null? ' ('.$IO['output']['O1']['nickName'].')' : '' );?>
                            </label>
                            </div>

                            <div class="form-check">
                            <input onclick="menual('/output/O2')" class="form-check-input" type="checkbox" value="" id="flexCheckChecked" <?php echo ($IO['output']['O2']['active'] =='true' ? 'checked' : '');?>>
                            <label class="form-check-label" for="flexCheckChecked">
                                <?php echo $IO['output']['O2']['name']. ($IO['output']['O2']['nickName'] != null?' ('.$IO['output']['O2']['nickName'].')': '' );?>
                            </label>
                            </div>

                            <div class="form-check">
                            <input onclick="menual('/output/O3')" class="form-check-input" type="checkbox" value="" id="flexCheckChecked" <?php echo ($IO['output']['O3']['active'] =='true' ? 'checked' : '');?>>
                            <label class="form-check-label" for="flexCheckChecked">
                                <?php echo $IO['output']['O3']['name'].($IO['output']['O3']['nickName'] != null?' ('.$IO['output']['O3']['nickName'].')': '' );?>            
                            </label>
                            </div>

                            <div class="form-check">
                            <input onclick="menual('/output/O4')" class="form-check-input" type="checkbox" value="" id="flexCheckChecked" <?php echo ($IO['output']['O4']['active'] =='true' ? 'checked' : '');?>>
                            <label class="form-check-label" for="flexCheckChecked">
                                <?php echo $IO['output']['O4']['name'].($IO['output']['O4']['nickName'] != null?' ('.$IO['output']['O4']['nickName'].')': '' );?> 
                            </label>
                            </div>

                            <div class="form-check">
                            <input onclick="menual('/output/O5')" class="form-check-input" type="checkbox" value="" id="flexCheckChecked" <?php echo ($IO['output']['O5']['active'] =='true' ? 'checked' : '');?>>
                            <label class="form-check-label" for="flexCheckChecked">
                                <?php echo $IO['output']['O5']['name'].($IO['output']['O5']['nickName'] != null?' ('.$IO['output']['O5']['nickName'].')' : '' );?>            
                            </label>
                            </div>

                            <div class="form-check">
                            <input onclick="menual('/output/O6')" class="form-check-input" type="checkbox" value="" id="flexCheckChecked" <?php echo ($IO['output']['O6']['active'] =='true' ? 'checked' : '');?>>
                            <label class="form-check-label" for="flexCheckChecked">
                                <?php echo $IO['output']['O6']['name'].($IO['output']['O6']['nickName'] != null?' ('.$IO['output']['O6']['nickName'].')' : '' );?>
                            </label>
                            </div>

                            <div class="form-check d-none">
                            <input onclick="menual('/output/AO1')" class="form-check-input" type="checkbox" value="" id="flexCheckChecked" <?php echo ($IO['output']['AO1']['active'] =='true' ? 'checked' : '');?>>
                            <label class="form-check-label" for="flexCheckChecked">
                                <?php echo $IO['output']['AO1']['name'].($IO['output']['AO1']['nickName'] != null?' ('.$IO['output']['AO1']['nickName'].')' : '' );?>
                            </label>
                            </div>

                            <div class="form-check d-none">
                            <input onclick="menual('/output/AO2')" class="form-check-input" type="checkbox" value="" id="flexCheckChecked" <?php echo ($IO['output']['AO2']['active'] =='true' ? 'checked' : '');?>>
                            <label class="form-check-label" for="flexCheckChecked">
                                <?php echo $IO['output']['AO2']['name'].($IO['output']['AO2']['nickName'] != null?' ('.$IO['output']['AO2']['nickName'].')' : '' );?>
                            </label>
                            </div>

                            <div class="form-check d-none">
                            <input onclick="menual('/output/AO3')" class="form-check-input" type="checkbox" value="" id="flexCheckChecked" <?php echo ($IO['output']['AO3']['active'] =='true' ? 'checked' : '');?>>
                            <label class="form-check-label" for="flexCheckChecked">
                                <?php echo $IO['output']['AO3']['name'].($IO['output']['AO3']['nickName'] != null?' ('.$IO['output']['AO3']['nickName'].')' : '' );?>
                            </label>
                            </div>

                    </div>





                    <div class="col px-3">
                        <h4> Input ports</h4>
                        <span> </span>
                        <div class="form-check">
                            <input onclick="menual('/input/I1')" class="form-check-input" type="checkbox" value="" id="flexCheckDefault" <?php echo ($IO['input']['I1']['active'] =='true' ? 'checked' : '');?>>
                            <label class="form-check-label" for="flexCheckDefault">
                                <?php echo $IO['input']['I1']['name'].($IO['input']['I1']['nickName'] != null?' ('.$IO['input']['I1']['nickName'].')' : '' );?>
                            </label>
                            </div>

                            <div class="form-check">
                            <input onclick="menual('/input/I2')" class="form-check-input" type="checkbox" value="" id="flexCheckChecked" <?php echo ($IO['input']['I2']['active'] =='true' ? 'checked' : '');?>>
                            <label class="form-check-label" for="flexCheckChecked">
                                <?php echo $IO['input']['I2']['name'].($IO['input']['I2']['nickName'] != null?' ('.$IO['input']['I2']['nickName'].')' : '' );?>     
                            </label>
                            </div>

                            <div class="form-check">
                            <input onclick="menual('/input/I3')" class="form-check-input" type="checkbox" value="" id="flexCheckChecked" <?php echo ($IO['input']['I3']['active'] =='true' ? 'checked' : '');?>>
                            <label class="form-check-label" for="flexCheckChecked">
                                <?php echo $IO['input']['I3']['name'].($IO['input']['I3']['nickName'] != null?' ('.$IO['input']['I3']['nickName'].')' : '' );?>  
                            </label>
                            </div>

                            <div class="form-check">
                            <input onclick="menual('/input/I4')" class="form-check-input" type="checkbox" value="" id="flexCheckChecked" <?php echo ($IO['input']['I4']['active'] =='true' ? 'checked' : '');?>>
                            <label class="form-check-label" for="flexCheckChecked">
                                <?php echo $IO['input']['I4']['name'].($IO['input']['I4']['nickName'] != null?' ('.$IO['input']['I4']['nickName'].')' : '' );?>  
                            </label>
                            </div>

                            <div class="form-check">
                            <input onclick="menual('/input/I5')" class="form-check-input" type="checkbox" value="" id="flexCheckChecked" <?php echo ($IO['input']['I5']['active'] =='true' ? 'checked' : '');?>>
                            <label class="form-check-label" for="flexCheckChecked">
                                    <?php echo $IO['input']['I5']['name'].($IO['input']['I5']['nickName'] != null?' ('.$IO['input']['I5']['nickName'].')' : '' );?>  
                            </label>
                            </div>

                            <div class="form-check">
                            <input onclick="menual('/input/I6')" class="form-check-input" type="checkbox" value="" id="flexCheckChecked" <?php echo ($IO['input']['I6']['active'] =='true' ? 'checked' : '');?>>
                            <label class="form-check-label" for="flexCheckChecked">
                                <?php echo $IO['input']['I6']['name'].($IO['input']['I6']['nickName'] != null?' ('.$IO['input']['I6']['nickName'].')' : '' );?>  
                            </label>
                            </div>

                            <div class="form-check d-none">
                            <input onclick="menual('/input/AI1')" class="form-check-input" type="checkbox" value="" id="flexCheckChecked" <?php echo ($IO['input']['AI1']['active'] =='true' ? 'checked' : '');?>>
                            <label class="form-check-label" for="flexCheckChecked">
                                <?php echo $IO['input']['AI1']['name'].($IO['input']['AI1']['nickName'] != null?' ('.$IO['input']['AI1']['nickName'].')' : '' );?>  
                            </label>
                            </div>

                            <div class="form-check d-none">
                            <input onclick="menual('/input/AI2')" class="form-check-input" type="checkbox" value="" id="flexCheckChecked" <?php echo ($IO['input']['AI2']['active'] =='true' ? 'checked' : '');?>>
                            <label class="form-check-label" for="flexCheckChecked">
                                <?php echo $IO['input']['AI2']['name'].($IO['input']['AI2']['nickName'] != null?' ('.$IO['input']['AI2']['nickName'].')' : '' );?>  
                            </label>
                            </div>

                            <div class="form-check d-none">
                            <input onclick="menual('/input/AI3')" class="form-check-input" type="checkbox" value="" id="flexCheckChecked" <?php echo ($IO['input']['AI3']['active'] =='true' ? 'checked' : '');?>>
                            <label class="form-check-label" for="flexCheckChecked">
                                <?php echo $IO['input']['AI3']['name'].($IO['input']['AI3']['nickName'] != null?' ('.$IO['input']['AI3']['nickName'].')' : '' );?>  
                            </label>
                            </div>

                    </div>
            
                </div>

            </div>
            <div class="col-12 col-lg-8 ">
                <div class="row">
                    <div class="d-flex justify-content-end"><p onclick="save()"  class="btn btn-primary " >Save..</p></div>

                    <div class="col-12 col-md-6">
                        <div class="form-group mb-5">
                            <label >SSID</label>
                            <input id="ssid" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="SSID">
                        </div>
                        <div class="form-group mb-5">
                            <label>Password</label>
                            <input id="password" type="password" class="form-control"  placeholder="Password">
                        </div>
                        <div class="form-group mb-5">
                            <label>Confirm Password</label>
                            <input id="password-confirmation" type="password" class="form-control"  placeholder="Confirm Password">
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="form-group mb-5">
                            <label >Add Header file</label>
                            <textarea class="form-control" name="" id="heaD" cols="25" rows="7" value="<?php echo $IO['advance']['header'];?>"></textarea>                            
                        </div>
                        <div class="form-group mb-5">
                            <label >Add variable</label>
                            
                            <textarea class="form-control" name="" id="variabL" cols="25" rows="7" value="<?php echo $IO['advance']['gloval'];?>"></textarea>
                        </div>
                        <div class="form-group mb-5">
                            <label >Setup</label>
                            <textarea class="form-control" name="" id="seT" cols="25" rows="7" value="<?php echo $IO['advance']['setup'];?>"></textarea>                        
                        </div>
                    </div>

                </div>
            </div>
        </div>






    
 
</div>


<script>
    (function () {
        document.getElementById('genarate').style.display = 'none';
    })();
</script>
<script>
    function menual(id){
     $.ajax({
        method: "POST",
        url: "active.php",
        data: { text: id }
      }); 

    }
</script>

<script>
    function save(){


        var ssid = document.getElementById('ssid').value;
        var pass = document.getElementById('password').value;
        var conPass = document.getElementById('password-confirmation').value;
        
       var head = document.getElementById('heaD').value;
        var variabl = document.getElementById('variabL').value;
        var set = document.getElementById('seT').value;

        // console.log(head+'\n'+variabl);

        if(ssid != "" && pass != "" && pass == conPass){
            $.post('updategenerate.php', {ssid: ssid, pass: pass, head: head, variabl:variabl, set:set}, function(data){
                if(data=='success'){
                    alert("Saved");
                }
                else{
                    alert('Not seved. try again');
                }
            });
        }
        else{
            alert('Not seved. try again');
        }
    }
</script>

<?php
  include('foter.php');
?>