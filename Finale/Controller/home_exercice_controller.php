<?php


function startExo() {
    if(isset($_POST["btn"])&&$_POST['btn']=="Valider exercice"){
        validExo();
    }elseif(isset($_POST["btn"])&&$_POST['btn']=="Cet exercice est valide"){
        exoValide();
    }
    require('View/home_exercice.php');
}

function startAddExo(){
    if(!isset($_POST["btn"]) || $_POST["btn"] == "Ajouter ressources" || $_POST["btn"] == "Modifier consigne"){
        require('View/add_exercice.php');
    }
    elseif ($_POST["btn"] == "Ajouter Exercice" ){
        require('Controller/add_exercice_controller.php');
    }
}

function showExo(){
    if($_POST["btn"] == "Supprimer exercice"){
        require('Controller/delete_exercice_controller.php');
    }
    else{
        require('View/exercice.php');
    }
}

function validExo(){
    
        $user = $_SESSION["nom"];
        $ex = $_SESSION["ex"];
        $id_ex = $_POST['exercice'];
        $d = dir("Public/upload/exercices/");
        $test = $user."_".$ex;
        while($entry = $d->read()) { 
            preg_match("($test?)", $entry, $new);
            $data = trim($new[0]);
            if (!empty($data)){ 
                $file = $entry;
            }
        } 
    $d->close();
    
        
    $request = fileToBddExo($file, $id_ex);
}

function startCorrect(){
    $id_eleve = $_POST['id_eleve'];
    $name_ex = $_POST['name_ex'];
    $instructions = $_POST['instructions'];
    require('View/correct_exercice.php');
}
          
?>