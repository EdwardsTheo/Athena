<?php 
    function startStudent2(){
        $request = updatePasseWord();
}

function isAnnonce() {
    $request =  getAnnonce();
    $i = 0;
    while($data = $request->fetch()) {
        $i++;
    }
    if($i == 0) return $test = false;
    else return $test = true;
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

function title(){
    if($_SESSION['status'] == 'eleve'){
        echo 'Bienvenue '.$_SESSION['prenom'];
    }
    elseif($_SESSION['status'] == 'professeur'){
        echo 'Profil de '.$_POST['Profil'];
    }
}

function titleLastCours(){
    if($_SESSION['status'] == 'eleve'){
        echo 'Votre dernier cours suivis';
    }
    elseif($_SESSION['status'] == 'professeur'){
        echo 'Le dernier cours suivis';
    }
}

function titleLastExercice(){
    if($_SESSION['status'] == 'eleve'){
        echo 'Votre dernier exercice fait';
    }
    elseif($_SESSION['status'] == 'professeur'){
        echo 'Le dernier exercice fait';
    }
}
?>