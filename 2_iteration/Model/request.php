<?php

require("connect_db.php");

function getUser() {
    $db = connexion_db();
    $request = $db->query('SELECT * FROM users');

    return $request;
}

function getClass() {
    $db = connexion_db();
    $answer = $db->query('SELECT * FROM cours WHERE id_rubrique = "'.htmlspecialchars($_POST['rubrique']).'"');

    return $answer;
}

function getMaxChapter() {
    //Requete pour connaitre le maximum de cours
    $db = connexion_db();
    $request = $db->query('SELECT index_cours FROM cours
    WHERE id_rubrique = \''.htmlspecialchars($_POST['id_rubrique']).'\'');
    return $request;
}

function getContenu() {
    $db = connexion_db();
    $request = $db->query('SELECT contenu_chapitre, nom_chapitre FROM chapitres');
    return $request;
}


function nameClass() {
    $db = connexion_db();
    $request = $db->query('SELECT co.nom_cours 
    FROM chapitres AS c
    LEFT JOIN cours AS co
    ON co.index_cours = c.index_cours
    WHERE co.index_cours =  \''.htmlspecialchars($_POST['index_cours']).'\'
    AND co.id_rubrique = \''.htmlspecialchars($_POST['id_rubrique']).'\'');
    return $request;
}

function getRub() {
    $db = connexion_db(); 
    $request = $db->query('SELECT nom_rubrique, svg, id_rubrique FROM rubriques');

    return $request;
}

function checkRead() {
    $db = connexion_db();
    $request = $db->query('SELECT status_cours
    FROM progress_cours
    WHERE id_user = \''.$_SESSION['id_user'].'\'');
    return $request;
}

function updateRead() {
    $db = connexion_db();
    
    $req = $db->prepare('UPDATE progress_cours
    SET status_cours = :nv_status
    WHERE id_user = \''.$_SESSION['id_user'].'\'
    AND id_cours = \''.htmlspecialchars($_POST['index_cours']).'\'');
    return $req;
}

function getChapterClass() {
    $db = connexion_db();
    
    $request = $db->query('SELECT c.nom_chapitre, co.id_rubrique, c.id_chapitre
    FROM chapitres AS c
    LEFT JOIN cours AS co
    ON c.index_cours = co.index_cours
    WHERE c.index_cours = \''.htmlspecialchars($_POST['index_cours']).'\'
    AND co.id_rubrique = \''.htmlspecialchars($_POST['id_rubrique']).'\'');
    return $request;
}

function req_modifChapter() {
    $db = connexion_db();
    
    $req = $db->prepare('UPDATE chapitres
    SET nom_chapitre = :nv_nom
    WHERE nom_chapitre = \''.htmlspecialchars($_POST['nom_chapitre']).'\'');
    return $req;
}



?>