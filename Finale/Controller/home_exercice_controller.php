<?php

function startExo() {
    $request = getRub();
    if(isset($_POST['id_eleve'])){
        $request5 = getStudent2();
    }
    $request5 = getStudent();
    $request4 = countAll();
    $request2 = countExos();
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


?>