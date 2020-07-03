<?php

//var_dump($_POST);

function startExo() {
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
    if($_POST["btn"] == "Valider exercice"){
        $user = $_SESSION[$id_user];
        
        require('Model/request');
        $d = dir("../Public/upload/");
    while($entry = $d->read()) { 
        preg_match("#($+?)#s", $entry, $new);
        $data = trim($new[1]);
        if (!empty($data)) echo '<a href="'.$entry.'">'.$data.'</a><br />';
    } 
    $d->close();
    }
        $file = ;
        $id_ex = $_POST['exercice'];
        $request = fileToBddEleve($file);
    }
}
          
?>