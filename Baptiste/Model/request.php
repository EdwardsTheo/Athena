<?php

require("connect_db.php");

function getUser() {
    $db = connexion_db();
    $request = $db->query('SELECT email, password, status_user, nom, prenom FROM users');

    return $request;
}

function getClass() {
    $db = connexion_db();
    $answer = $db->query('SELECT * FROM cours WHERE id_rubrique = "'.htmlspecialchars($_POST['rubrique']).'"');

    return $answer;
}

function getRub() {
    $db = connexion_db(); 
    $request = $db->query('SELECT nom_rubrique, svg, id_rubrique FROM rubriques');

    return $request;
}

function getChapterClass() {
    $db = connexion_db(); 
    $request = $db->query('SELECT * FROM chapitres WHERE id_cours = "'.htmlspecialchars($_POST['id_cours']).'"');

    return $request;
}



?>