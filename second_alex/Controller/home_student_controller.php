<?php 

function lastClass() {
    $test = false;
    $test1 = false;
    $id_rubrique = 1;
    while($test == false) {
        $request = checkReadRubrique($id_rubrique);
        if($request == null) {
            $test = true;
            $p_id_cours = 0;
            break;
            
        }
        while($data = $request->fetch()) {
            $status = $data['status_cours'];
            $p_id_cours = $data['id_cours'];
            if($status == 'non_lu') {
                $test1 = true;
                break;
            }
        }
        if($test1 == true) break;
        else $id_rubrique++;
    }
    return $p_id_cours;
}
lastClass();

function selectLast() {
    $id_cours = lastClass();
    $request = getLastClass($id_cours);
    return $request;
}



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