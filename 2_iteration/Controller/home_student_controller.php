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


function selectLast() {
    $id_cours = lastClass();
    echo $id_cours;
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

function selectLastEx(){
    $id_user = $_SESSION["id_user"];
    $request = showCurrentEx($id_user);
    return $request;
}

?>