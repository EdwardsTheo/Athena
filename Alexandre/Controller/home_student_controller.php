<?php 
    function startStudent2(){
        $request = updatePasseWord();
}

function ErrorMessage(){
    if (isset($_POST['mdp']) AND empty($_POST['mdp'])){
        $message = 'Vous devez remplir le champs avant de valider';
    }
    elseif (isset($_POST['mdp']) AND !empty($_POST['mdp'])){
        $message = 'Votre mot de passe à été modifié';
    }
    else {
        $message = ' ';
    }
    echo $message;
}
?>