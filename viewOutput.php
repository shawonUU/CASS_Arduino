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
  .headerfile{
	color: #31ca3a;
}
.string{
	color: #66a5f7;
}
.keyword{
	color: #3109f4;
	font-weight: bold;
}
.other{
	color: #d70c0c;
}
.value{
	color:#f43dc7;
}
.comment{
	color: #8c7289;
}
.char{
	color: #7dccfb;
}
.nocolor{
	color: #f7d44f;
}
.buildin{
	color: #1fe3d1;
}


.btnn {
  background-color: #2196F3;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  outline: none;
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
  background-color: #0b7dda;
  
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
                      <input id="nickname" style="height: 20px; width:120px;" type="text" value="<?php echo $IO['output'][$Id]['nickName'] != null ?$IO['output'][$Id]['nickName']: '' ; ?>" placeholder="No Name">
                  </span>
             </div>
              <p id="save" onclick="save('<?php echo $Id ?>')"  class="btn btn-primary" >Save</p>
              
          </div>
          <div style="position: relative;"class="" role="group" aria-label="Basic example">
              <button  class="mb-2 btn btn-primary" disabled>variable of available input devices value</button><br>
              <button  class="btn btn-primary" disabled><span style="font-size: 14px;">Variable name <br>Device Name</span></button>
              <?php for($i = 1; $i<10; $i++){
                $dv = '';
                if($i>6){ $dv = 'AI'.$i-6;}else{$dv = 'I'.$i;}
                if($IO['input'][$dv]['active'] == 'true'){
              ?>
              <button  class="btn btn-secondary" disabled><?php echo $IO['input'][$dv]['name'].'v'; ?><br> <span style="font-size: 10px;"><?php echo $IO['input'][$dv]['nickName'] != null ?$IO['input'][$dv]['nickName']: $IO['input'][$dv]['name'] ; ?></span></button>
              <?php }} ?>
          </div>
          <div class="row">
            <div class="col-6">
              <div style="background-color: #272822;"class=" d-none justify-content-end"><p onclick="refresh()" id="refresh"   class="btn btn-primary " >Refresh</p></div>
            
                <div style="height: 100vh; font-size: 20px;"class="editor" id="editor">
                  <?php echo $IO['output'][$Id]['setValue'] != null?$IO['output'][$Id]['setValue'] : $IO['output'][$Id]['dset'] ; ?>
              </div>
            </div>
            <div id="ok" class="text-white col-6"></div>
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
      function save(id){
          var nam = document.getElementById("nickname").value;
          var cod = editor.getSession().getValue();
          $.post('updateoutpot.php', {name: nam, code:cod, ID:id}, function(data){
              if(data=='success'){
                alert("Saved");
              }
              else{
                alert('Not seved. try again');
              }
          });  
      }
    </script>





    <?php
          /*function formate($statment){
            $lnt = strlen($statment);
            
            $cry = "";$ck=0;$spc=0;
            for($i=0; $i<$lnt; $i++){
              //echo ord($statment[$i]).' ';
              if(((ord($statment[$i]) == 160||ord($statment[$i]) == 32)&&
                ($i+1<$lnt &&(ord($statment[$i+1]) == 160||ord($statment[$i+1]) == 32))) ||
                ((ord($statment[$i]) == 160||ord($statment[$i]) == 32) && $ck == 1)){$ck = 1;continue;}
                else{$ck = 0;}

              if($statment[$i] == '\t'){continue;}
              if($statment[$i] == '{'){$spc += 2;$cry = $cry . "{\n".set_spc($spc); continue;}
              if($statment[$i] == '}'){$spc -= 2;$cry = $cry .  "\n".set_spc($spc)."}"; continue;}
              $cry = $cry . $statment[$i];
            }
            //var_dump('');
            return $cry;
          }
          function set_spc($spc){
            
            $total_spc = "";
              for($i=0; $i<$spc; $i++){$total_spc = $total_spc.' ';}
              return $total_spc;
          }*/
    ?>




  <!--<div class="row">
              <div class="dropdown">
                  <button class="btnn btn " style="border-left:1px solid navy">
                  <svg  width="35" height="35" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/></svg>
                  </button>
                  <div id="dropdown" class="dropdown-content">
                    <a onclick="selectStatment('if')" href="#">if</a>
                    <a onclick="selectStatment('else if')" href="#">else if</a>
                    <a onclick="selectStatment('else')" href="#">else</a>
                  </div>
                </div>
            </div>

              <div class="row m-3">
                <div class="col-6">
                  <pre style="font-size: 20px;" id="code"></pre>
                </div>
                <div class="col-6 bg-primary text-white">
                  btn 1 <br><br><br> btn 2
                </div>
              </div>-->
<script>
  /*function selectStatment(statmentType){
    document.getElementById("dropdown").display = "none";
    var statment = document.getElementById("code").textContent;
    
    if(statmentType == 'if'){
      statment += "if( 1 == 1 ){digitalWrite(O1,LOW);}";
    }else if(statmentType == 'else if'){
      statment += "else if( 1 == 1 ){digitalWrite(O1,LOW);}";
    }else{
      statment += "else{digitalWrite(O1,LOW);}";
    }
    
    statment = formate(statment);
    //alert(statment);
    document.getElementById("code").textContent = statment;
    code_heighliter();
  }

  function formate(statment){
    var lnt = statment.length;
    
    var cry = "",ck=0,spc=0;
    for(var i=0; i<lnt; i++){
      if(((statment[i].charCodeAt(0) == 160||statment[i].charCodeAt(0) == 32)&&
        (i+1<lnt &&(statment[i+1].charCodeAt(0) == 160||statment[i+1].charCodeAt(0) == 32))) ||
        ((statment[i].charCodeAt(0) == 160||statment[i].charCodeAt(0) == 32) && ck == 1)){ck = 1;continue;}
        else{ck = 0;}

      if(statment[i] == '\t'){continue;}
      if(statment[i] == '{'){spc += 2;cry += "{\n"+set_spc(spc); continue;}
      if(statment[i] == '}'){spc -= 2;cry += "\n"+set_spc(spc)+"}"; continue;}
      cry += statment[i];
    }
    return cry;
  }
  function set_spc(spc){
    //console.log(spc);
     var total_spc = "";
      for(var i=0; i<spc; i++){total_spc += ' ';}
      //console.log(total_spc);
      return total_spc;
  }*/
</script>





    <script>
      /*function fnc(){
        //alert(document.getElementById("code").textContent);
        console.log(document.getElementById("code").textContent);
        document.getElementById("code").innerHTML = document.getElementById("code").textContent + "&#10; int var = 5;";
        my_function();
        
      }*/
    </script>







 
<?php
    
  include('foter.php');
?>




