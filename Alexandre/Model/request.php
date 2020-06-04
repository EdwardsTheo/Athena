<?php

require("connect_db.php");

function getUser() {
    $db = connexion_db();
    $request = $db->query('SELECT * FROM users');

    return $request;
}

function getClass() {
    $db = connexion_db();
    $answer = $db->query('SELECT * FROM cours WHERE id_rubrique = "'.$_GET['rubrique'].'"');

    return $answer;
}

function getRub() {
    $db = connexion_db(); 
    $request = $db->query('SELECT nom_rubrique, svg, id_rubrique FROM rubriques');

    return $request;
}

function getChapterClass() {
    $db = connexion_db(); 
    $request = $db->query('SELECT nom_chapitre, svg, id_chapitre FROM chapitres');

    return $request;
}

function getStudent() {
    $db = connexion_db();
    $request = $db->query('SELECT nom, prenom, heure_connexion FROM users WHERE status_user = "eleve"');

    return $request;
}

function updateHour(){
    $db = connexion_db();
    $id = $_SESSION['id'];
    $request = $db->query("UPDATE `users` SET `heure_connexion` = NOW() WHERE `users`.`id_user` = $id");

    return $request;
}
function getValideExercice(){
    $db = connexion_db();
    $id = $_SESSION['id'];
    $request2 = $db->query("SELECT COUNT(*) FROM `rendus_exo` WHERE `id_user` = $id AND `progress_exo`= 'valide'");

    return $request2;
}
function getInProgressExercice(){
    $db = connexion_db();
    $id = $_SESSION['id'];
    $request3 = $db->query("SELECT COUNT(*) FROM `rendus_exo` WHERE `id_user` = $id AND `progress_exo`= 'en_cours'");

    return $request3;
}

function getReturnedExercice(){
    $db = connexion_db();
    $id = $_SESSION['id'];
    $request4 = $db->query("SELECT COUNT(*) FROM `rendus_exo` WHERE `id_user` = $id AND `progress_exo`= 'rendu'");

    return $request4;
}

function updatePasseWord(){
    $db = connexion_db();
    $id = $_SESSION['id'];
    if (isset($_POST['mdp']) AND !empty($_POST['mdp'])){
        $mdp = $_POST['mdp'];
        $request = $db->query("UPDATE `users` SET `password`= '$mdp' WHERE id_user = $id");
        return $request;
    }
}

function ajouterAnnonce(){
    $db = connexion_db();
    $annonce = $_POST['annonce'];
    $titre = $_POST['titre_annonce'];
    $id = $_SESSION['id'];
    $date = date("Y-m-d");
    $date_id = date('d-m-Y H:i:s');
    $d = DateTime::createFromFormat('d-m-Y H:i:s', $date_id);
    $id_annonce = $d->getTimestamp();
    $request = $db->query("INSERT INTO `annonces` (`id_annonce`, `id_user`, `nom_annonce`, `date_annonce`, `contenu_annonce`) VALUES ('$id_annonce', '$id', '$titre', '$date', '$annonce')");

    return $request;
}

function getAnnonce(){
    $db = connexion_db();
    $request2 = $db->query("SELECT * FROM `annonces` ORDER BY `annonces`.`id_annonce` DESC");

    return $request2;
}
function getEditAnnonce($data){
    $db = connexion_db();
    $contenue = $_POST['nouvelle_annonce'];
    $id_annonce = $data['id_annonce'];
    $request3 = $db->query("UPDATE annonces SET contenu_annonce = '$contenue' WHERE id_annonce = $id_annonce");
    $data2 = $request3->fetch();

    return $request3;
}

function deleteAnnonce($data){
    $db = connexion_db();
    $id_annonce = $data['id_annonce'];
    $request4 = $db->query("DELETE FROM `annonces` WHERE id_annonce = $id_annonce");
    $data3 = $request4->fetch();

    return $request4;
}
?>