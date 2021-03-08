<?php 
    function startStudent2(){
        $request = updatePasseWord();
}

function isnews() {
    $request =  getnews();
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
    if($_SESSION['status'] == 'student'){
        echo 'Bienvenue '.$_SESSION['firstname'];
    }
    elseif($_SESSION['status'] == 'teacher'){
        echo 'Profil de '.$_POST['Profil'];
    }
}

function titleLastclass(){
    if($_SESSION['status'] == 'student'){
        echo 'Votre dernier cours suivis';
    }
    elseif($_SESSION['status'] == 'teacher'){
        echo 'Le dernier cours suivis';
    }
}

function titleLastExercice(){
    if($_SESSION['status'] == 'student'){
        echo 'Votre dernier exercice fait';
    }
    elseif($_SESSION['status'] == 'teacher'){
        echo 'Le dernier exercice fait';
    }
}
?>