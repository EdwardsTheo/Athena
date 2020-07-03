<?php

function startAddClass() {
    $request = getRub();
    if(isset($_POST['nom_rubrique'])) $request_class = getClass();
    require('View/add_class.php');
}

function MaxClass() {
    $request = getClass();
    $i = 0;
    while($data = $request->fetch()) {
        $i++;
    }
    $request->closeCursor();
    return $i;
}

function addNewClass() {
    $id_cours = MaxClass();
    $new_id_cours = $id_cours + 1;
    $req = reqAddClass();

    $req->execute(array(
        'id_rubrique' => $_POST['rubrique'],
        'index_cours' => $new_id_cours,
        'nom_cours' => $_POST['new_name_class']
    ));
    echo 'ca';
    unset($_POST);
}

function addNewChapter() {
    $req = reqAddNewChapter();

    $req->execute(array(
        'index_cours' => $_POST['index_cours'], 
        'id_rubrique' => $_POST['id_rubrique'], 
        'nom_chapitre' => $_POST['chapitre_title'], 
        'contenu_chapitre' => $_POST['url_chapter']
    
    ));
    unset($_POST);
}

?>