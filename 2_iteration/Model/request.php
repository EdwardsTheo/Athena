<?php

require("connect_db.php");

function getUser() {
    $db = connexion_db();
    $request = $db->query('SELECT * FROM users');

    return $request;
}

function getClass() {
    $db = connexion_db();
    $answer = $db->query('SELECT * FROM cours WHERE 
    id_rubrique = "'.htmlspecialchars($_POST['rubrique']).'"');

    return $answer;
}

function selectWithName() {
    $db = connexion_db();

    $request = $db->query('SELECT * FROM cours WHERE nom_cours = \''.htmlspecialchars($_POST['nom_cours']).'\'');
    return $request;
}

function getMaxChapter() {
    //Requete pour connaitre le maximum de cours
    $db = connexion_db();
    $request = $db->query('SELECT id_chapitre FROM chapitres
    WHERE index_cours = \''.htmlspecialchars($_POST['index_cours']).'\'');
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
    $request = $db->query('SELECT status_cours, id_cours
    FROM progress_cours
    WHERE id_user = \''.$_SESSION['id_user'].'\'');
    return $request;
}

function checkReadRubrique($id_rubrique) {
    $db = connexion_db();
    if(isset($_SESSION['id_user'])) {
        $request = $db->query('SELECT p.status_cours, p.id_cours
        FROM progress_cours AS p
        LEFT JOIN cours AS co
        ON p.id_cours = co.id_cours
        WHERE id_user = \''.$_SESSION['id_user'].'\'
        AND id_rubrique = \''.$id_rubrique.'\'');
        return $request;
    }
}

function updateRead() {
    $db = connexion_db();
   
    $req = $db->prepare('UPDATE progress_cours
    SET status_cours = :nv_status
    WHERE id_user = \''.$_SESSION['id_user'].'\'
    AND id_cours = \''.htmlspecialchars($_POST['id_cours']).'\'');
    return $req;
}

function getChapterClass() {
    $db = connexion_db();
    
    $request = $db->query('SELECT c.nom_chapitre, c.id_rubrique, c.id_chapitre
    FROM chapitres AS c
    WHERE c.index_cours = \''.htmlspecialchars($_POST['index_cours']).'\'
    AND c.id_rubrique = \''.htmlspecialchars($_POST['id_rubrique']).'\'');
    return $request;
}

function requestModifChapter() {
    $db = connexion_db();
    
    $req = $db->prepare('UPDATE chapitres
    SET nom_chapitre = :nv_nom
    WHERE nom_chapitre = \''.htmlspecialchars($_POST['nom_chapitre']).'\'');
    return $req;
}


function getLastClass($id) {
    $db = connexion_db();

    $request = $db->query('SELECT r.nom_rubrique, c.nom_cours, c.index_cours, r.id_rubrique, c.id_cours 
    FROM rubriques AS r
    LEFT JOIN cours AS c
    ON c.id_rubrique = r.id_rubrique
    WHERE c.id_cours = \''.$id.'\'');
    return $request;
}

/***************--------------ADD NEW CLASS---------------********/

function reqAddClass() {
    $db = connexion_db();

    $req = $db->prepare('INSERT INTO cours(id_rubrique, index_cours, nom_cours)
    VALUES(:id_rubrique, :index_cours, :nom_cours)');

    return $req;
}

function reqAddNewChapter() {
    $db = connexion_db();

    $req = $db->prepare('INSERT INTO chapitres(index_cours, id_rubrique, nom_chapitre, contenu_chapitre)
    VALUES(:index_cours, :id_rubrique, :nom_chapitre, :contenu_chapitre)');
    return $req;
}

?>