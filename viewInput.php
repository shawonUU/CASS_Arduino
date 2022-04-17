<?php
   include('profileHeader.php');
   
    include('dbcon.php');

    if(isset($_GET['id'])){
      $Id = $_GET['id'];
    }
   else{
      header('Location: profile.php');
   }
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    .btnn {
  background-color: #fff;
  color: #000;
  font-size: 16px;
  border: none;
  outline: none;
  border-radius: 10px;

  text-align: start !important;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  display: block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd}

/* Show the dropdown menu on hover */
.btnn:hover +.dropdown-content{
  display: block;
}
.dropdown-content:hover{
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.btnn:hover, .dropdown:hover .btnn{
  background-color: #fff;
  
}
</style>

<?php
 
 $reference = $database->getReference('IO/'.$_SESSION['currentUserId']);
 $snapshot = $reference->getSnapshot();
 $IO = $reference->getValue();

?>
      <div class="bg-dark p-3">
          <div class="mb-3 d-flex justify-content-between">
             <div>
                <span class="bg-primary p-2 rounded-circle"style="blue; color: white; font-size: 25px; "><?php echo $Id; ?></span> 
                  <span>
                      <input id="nickname" style="height: 20px; width:120px;" type="text" value="<?php echo $IO['input'][$Id]['nickName'] != null ?$IO['input'][$Id]['nickName']: '' ; ?>" placeholder="No Name"> 
                  </span>
             </div>
              <p id="save" onclick="save('<?php echo $Id ?>')"  class="btn btn-primary" >Save</p>
              
          </div>

          <div class="row">
            <div class="col-12 col-lg-6 px-5">
                <div>
                        <div class="dropdown ">
                          <p class="text-white">Read the input device <span style="font-size: 20px;"><?php echo $Id;?></span></p>
                            <textarea class="btnn" type="text" name="" id="readInput" cols="30" rows="2" style="border-left:1px solid navy">
                                <?php echo $IO['input'][$Id]['getValue'] != null?$IO['input'][$Id]['getValue'] : $IO['input'][$Id]['deget'] ; ?>
                            </textarea>
                            <div id="dropdown" style="z-index: 100;" class="dropdown-content">
                                <a onclick="selectStatment('digitalRead();')" href="#">digitalRead()</a>
                                <a onclick="selectStatment('analogRead();')" href="#">analogRead()</a>
                                <a onclick="selectStatment('analogReadResolution()')" href="#">analogReadResolution()</a>
                                <a onclick="selectStatment('delay();')" href="#">delay()</a>
                                <a onclick="selectStatment('delayMicroseconds();')" href="#">delayMicroseconds()</a>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 px-5">

                <p class="text-white">Customise the into input device value. The Veriable is <span style="font-size: 20px;"><?php echo $Id.'v';?></span></p>
                <div style="background-color: #272822;"class=" d-none justify-content-end"><p onclick="refresh()" id="refresh"   class="btn btn-primary " >Refresh</p></div>
            
                <div style=" height: 80vh; font-size: 20px;"class="editor" id="editor">
                    <?php echo $IO['input'][$Id]['coustom'];?>
                </div>
                <div class="text-white"style="background-color: #272822;">
                    <div class="row mb-3">
                      <label style=" font-size: 20px;" class="col-4 col-form-label">Dispaly Data</label>
                      <div class="col-7">
                        <input type="text" class="form-control" id="display" placeholder="Data type must be String" value="<?php echo $IO['input'][$Id]['display'];?>">
                      </div>
                      </div>
                    <div class="row mb-3">
                      <label style="color: #f92672; font-size: 20px;" class="col-4 col-form-label">return</label>
                      <div class="col-7">
                        <input type="text" class="form-control" id="return" value="<?php echo $IO['input'][$Id]['dreturn'] != null?$IO['input'][$Id]['dreturn'] : $IO['input'][$Id]['return'] ; ?>">
                      </div>
                    </div>
                </div>
          </div>
      </div>
      

    <script src="js/lib/ace.js"></script>
    <script src="js/lib/theme-monokai.js"></script>
    <script src="js/ide.js"></script>

         
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/javascript.js"></script>

    <script>
        (function () {
            document.getElementById('genarate').style.display = 'none';
        })();
    </script>

    <script>
        function selectStatment(stat){
            document.getElementById('readInput').value = document.getElementById('readInput').value+stat;
        }
    </script>
  
    <script>
      function save(id){
       
          var nam = document.getElementById("nickname").value;
          var input_code = document.getElementById('readInput').value;
          var custom_code = editor.getSession().getValue();
          var dsply = document.getElementById("display").value;
          var retrn = document.getElementById("return").value;

          dsply = dsply.trim();
          retrn = retrn.trim();
          input_code = input_code.trim();
          custom_code = custom_code.trim();
          //alert(nam+' '+custom_code+' '+id);
          $.post('updateinputt.php', {name: nam, custom_code:custom_code,input_code:input_code, ID:id, dsply:dsply, retrn:retrn}, function(data){
              if(data=='Success'){
                alert("Saved");
              }
              else{
                alert('Not seved. try again');
              }
          });  
      }
    </script>

 
<?php
    
  include('foter.php');
?>




