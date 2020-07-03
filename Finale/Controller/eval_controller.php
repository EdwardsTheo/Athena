<?php

function startHomeEval() {
    $request = reqPrintEval();
    require('View/home_evaluation.php');
}

function startEval() {
    if(isset($_POST["btn"])&&$_POST["btn"]=="Valider l'exercice"){
        validerExoEval();
    }
    if(isset($_POST['showExo'])) {
        $request_exo = reqShowExo(); 
    }
    $request = reqExoEval();
    require('View/evaluation.php');
}

function showTime($id_eval) {
    $request = reqPrintEval();
    $test = false;
    while($data = $request->fetch()) {
        if($data['id_evaluation'] == $id_eval) {
            date_default_timezone_set('europe/paris');
            $sTime = $data['heure_debut'];
            $hour = date('H:i:s');
            if($sTime <= $hour) {
                $test = true;
                break;
            }
        }
    }
    return $test;
}

function showDate($id_eval) {
    $request = reqPrintEval();
    $test = false;
    while($data = $request->fetch()) {
        if($data['id_evaluation'] == $id_eval) {
            $evalDate = $data['date'];
            $currentDate = date('o-m-d');
            if($evalDate == $currentDate) {
                $test = true; 
                break;
                
            }
        }
    }
    return $test;
}

function existDate($id_eval) {
    $request = reqPrintEval();
    while($data = $request->fetch()) {
        if($data['id_evaluation'] == $id_eval) {
            if($data['date'] != null) {
                return $data['date'];
                break;
            }
        }
    }
}

function modifProgress($modif, $id_eval) {
    $req = reqModifProgress($id_eval); 
    $req->execute(array(
        'nv_status' => $modif
    ));
    $req->closeCursor();
}

function ending($id_eval) {
    $request = reqPrintEval();
    $test = false;
    while($data = $request->fetch()) {
        if($data['id_evaluation'] == $id_eval) {
            date_default_timezone_set('europe/paris');
            $sTime = $data['heure_fin'];
            $hour = date('H:i:s');
            if($sTime <= $hour) {
                $test = true;
            }
        }
    }
    return $test;
}

function validerExoEval(){
    $user = $_SESSION["nom"];
    $ex = $_SESSION["ex"];
    $id_ex = $_POST['id_ex'];
    $d = dir("Public/upload/eval/");
    $test = $user."_".$ex;
    while($entry = $d->read()) { 
        preg_match("($test?)", $entry, $new);
        $data = trim($new[0]);
        if (!empty($data)){
            $file = $entry;
        } 
    }
    $d->close();
        
    $request = fileToBddEval($file, $id_ex);
}
?>