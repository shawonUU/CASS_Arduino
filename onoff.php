<?php
session_start();
include('dbcon.php');
    $un = $_POST['id'];
    $vlo = $_POST['value'];

    if(isset($_SESSION['currentUserId'])){
        
            // $uid = $_SESSION['currentUserId'];
            // $vl = ['value' => $vlo,];
            // $database->getReference('IO/'.$uid.'/output'.'/'.$un)->update($vl);


            $reference = $database->getReference('IO/'.$_SESSION['currentUserId']);
            $snapshot = $reference->getSnapshot();
            $value = $reference->getValue();

            $value['output'][$un]['value'] = $vlo;
            $value['arduino'] = "";


            $value['arduino'] = $value['output']['O1']['value']." ";
            $value['arduino'] .= $value['output']['O2']['value']." ";
            $value['arduino'] .= $value['output']['O3']['value']." ";
            $value['arduino'] .= $value['output']['O4']['value']." ";
            $value['arduino'] .= $value['output']['O5']['value']." ";
            $value['arduino'] .= $value['output']['O6']['value']." ";
            $value['arduino'] .= $value['output']['AO1']['value']." ";
            $value['arduino'] .= $value['output']['AO2']['value']." ";
            $value['arduino'] .= $value['output']['AO3']['value']." ";

            $value['arduino'] .= $value['output']['O1']['menual']." ";
            $value['arduino'] .= $value['output']['O2']['menual']." ";
            $value['arduino'] .= $value['output']['O3']['menual']." ";
            $value['arduino'] .= $value['output']['O4']['menual']." ";
            $value['arduino'] .= $value['output']['O5']['menual']." ";
            $value['arduino'] .= $value['output']['O6']['menual']." ";
            $value['arduino'] .= $value['output']['AO1']['menual']." ";
            $value['arduino'] .= $value['output']['AO2']['menual']." ";
            $value['arduino'] .= $value['output']['AO3']['menual']." ";

            $value['arduino'] .= $value['input']['I1']['value']." ";
            $value['arduino'] .= $value['input']['I2']['value']." ";
            $value['arduino'] .= $value['input']['I3']['value']." ";
            $value['arduino'] .= $value['input']['I4']['value']." ";
            $value['arduino'] .= $value['input']['I5']['value']." ";
            $value['arduino'] .= $value['input']['I6']['value']." ";
            $value['arduino'] .= $value['input']['AI1']['value']." ";
            $value['arduino'] .= $value['input']['AI2']['value']." ";
            $value['arduino'] .= $value['input']['AI3']['value']." ";

            $database->getReference('IO/'.$_SESSION['currentUserId'])->update($value);


    }   
?>