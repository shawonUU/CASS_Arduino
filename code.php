<?php
include('profileHeader.php');
include('codeTemplete.php');
?>


<div style="height: 100vh; font-size: 20px;"class="editor" id="editor">
    <?php
        $ln = strlen($code);
        for($i=0; $i<$ln; $i++){
            if($code[$i] == '<'){echo '&lt;';}
            else if($code[$i] == '>'){echo '&gt;';}
            else if($code[$i] == '\\' && $code[$i+1] == 'n'){
                echo '<br>'; $i++;
            }
            else echo $code[$i];
        }
    ?>
</div>

<script src="js/lib/ace.js"></script>
    <script src="js/lib/theme-monokai.js"></script>
    <script src="js/ide.js"></script>

    <?php
    
    include('foter.php');
  ?>