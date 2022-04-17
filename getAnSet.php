<?php
    include('dbcon.php');
    session_start();


    $reference = $database->getReference('IO/'.$_SESSION['currentUserId']);

    $snapshot = $reference->getSnapshot();
    $value = $reference->getValue();

    $vlo = "";
    $item = 1;
     for($i=0; $i<strlen($value['arduino']); $i++){
        if($value['arduino'][$i] == ' '){
           
            if($item == 1){$value['output']['O1']['value'] = $vlo;}
            else if($item == 2){$value['output']['O2']['value'] = $vlo;}
            else if($item == 3){$value['output']['O3']['value'] = $vlo;}
            else if($item == 4){$value['output']['O4']['value'] = $vlo;}
            else if($item == 5){$value['output']['O5']['value'] = $vlo;}
            else if($item == 6){$value['output']['O6']['value'] = $vlo;}
            else if($item == 7){$value['output']['AO1']['value'] = $vlo;}
            else if($item == 8){$value['output']['AO2']['value'] = $vlo;}
            else if($item == 9){$value['output']['AO3']['value'] = $vlo;}

            else if($item == 10){$value['output']['O1']['menual'] = $vlo;}
            else if($item == 11){$value['output']['O2']['menual'] = $vlo;}
            else if($item == 12){$value['output']['O3']['menual'] = $vlo;}
            else if($item == 13){$value['output']['O4']['menual'] = $vlo;}
            else if($item == 14){$value['output']['O5']['menual'] = $vlo;}
            else if($item == 15){$value['output']['O6']['menual'] = $vlo;}
            else if($item == 16){$value['output']['AO1']['menual'] = $vlo;}
            else if($item == 17){$value['output']['AO2']['menual'] = $vlo;}
            else if($item == 18){$value['output']['AO3']['menual'] = $vlo;}

            
            else if($item == 19){$value['input']['I1']['value'] = $vlo;}
            else if($item == 20){$value['input']['I2']['value'] = $vlo;}
            else if($item == 21){$value['input']['I3']['value'] = $vlo;}
            else if($item == 22){$value['input']['I4']['value'] = $vlo;}
            else if($item == 23){$value['input']['I5']['value'] = $vlo;}
            else if($item == 24){$value['input']['I6']['value'] = $vlo;}
            else if($item == 25){$value['input']['AI1']['value'] = $vlo;}
            else if($item == 26){$value['input']['AI2']['value'] = $vlo;}
            else if($item == 27){$value['input']['AI3']['value'] = $vlo;}
            

            $item++;$vlo = "";
        }
        $vlo .= $value['arduino'][$i];
     }
     $database->getReference('IO/'.$_SESSION['currentUserId'])->update($value);

    // echo json_encode($vlo);




?>