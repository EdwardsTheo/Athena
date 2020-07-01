<?php

require("connect_db.php");

// Récupère le sinfos du user 
function getUser() {
    $db = connexion_db();
    $request = $db->query('SELECT * FROM users');

    return $request;
}

// Récupère les cours 
function getClass() {
    $db = connexion_db();
    $answer = $db->query('SELECT * FROM cours WHERE id_rubrique = "'.$_GET['rubrique'].'"');

    return $answer;
}

// Récupère les rubriques 
function getRub() {
    $db = connexion_db(); 
    $request = $db->query('SELECT nom_rubrique, svg, id_rubrique FROM rubriques');

    return $request;
}

// Récupère les chapitres de cours
function getChapterClass() {
    $db = connexion_db(); 
    $request = $db->query('SELECT nom_chapitre, svg, id_chapitre FROM chapitres');

    return $request;
}

// Récupère les infos des élèves 
function getStudent() {
    $db = connexion_db();
    $request = $db->query('SELECT nom, prenom, heure_connexion, id_user FROM users WHERE status_user = "eleve"');

    return $request;
}

// Met a jour la dernière heure de connexion d'un élève 
function updateHour(){
    $db = connexion_db();
    $id = $_SESSION['id'];
    $request = $db->query("UPDATE `users` SET `heure_connexion` = NOW() WHERE `users`.`id_user` = $id");

    return $request;
}

//----------------------------- Graphique Chapitre 1 --------------------------------


// Récupère le nombre  d'exos Validés 
function getValideExercice_chap1(){
    $db = connexion_db();
    $id_eleve = $_GET['id_eleve'];
    $request3 = $db->query("SELECT COUNT(*) FROM `rendus_exo`
    LEFT JOIN exercices ON rendus_exo.id_exercice = exercices.id_exercice
    WHERE id_rubrique = 1
    AND id_user = $id_eleve
    AND progress_exo = 'valide'");

    return $request3;
}

// Récupère le nombre d'exos en progression
function getInProgressExercice_chap1(){
    $db = connexion_db();
    $id_eleve = $_GET['id_eleve'];
    $request4 = $db->query("SELECT COUNT(*) FROM `rendus_exo`
    LEFT JOIN exercices ON rendus_exo.id_exercice = exercices.id_exercice
    WHERE id_rubrique = 1
    AND id_user = $id_eleve
    AND progress_exo = 'en_cours'");

    return $request4;
}

// Récupère le nomnbre d'exos rendu
function getReturnedExercice_chap1(){
    $db = connexion_db();
    $id_eleve = $_GET['id_eleve'];
    $request5 = $db->query("SELECT COUNT(*) FROM `rendus_exo`
    LEFT JOIN exercices ON rendus_exo.id_exercice = exercices.id_exercice
    WHERE id_rubrique = 1
    AND id_user = $id_eleve
    AND progress_exo = 'rendu'");

    return $request5;
}


//---------------------------- Graphique Chapitre 2 ---------------------------------

function getValideExercice_chap2(){
    $db = connexion_db();
    $id_eleve = $_GET['id_eleve'];
    $request6 = $db->query("SELECT COUNT(*) FROM `rendus_exo`
    LEFT JOIN exercices ON rendus_exo.id_exercice = exercices.id_exercice
    WHERE id_rubrique = 2
    AND id_user = $id_eleve
    AND progress_exo = 'valide'");

    return $request6;
}

function getInProgressExercice_chap2(){
    $db = connexion_db();
    $id_eleve = $_GET['id_eleve'];
    $request7 = $db->query("SELECT COUNT(*) FROM `rendus_exo`
    LEFT JOIN exercices ON rendus_exo.id_exercice = exercices.id_exercice
    WHERE id_rubrique = 2
    AND id_user = $id_eleve
    AND progress_exo = 'en_cours'");

    return $request7;
}

function getReturnedExercice_chap2(){
    $db = connexion_db();
    $id_eleve = $_GET['id_eleve'];
    $request8 = $db->query("SELECT COUNT(*) FROM `rendus_exo`
    LEFT JOIN exercices ON rendus_exo.id_exercice = exercices.id_exercice
    WHERE id_rubrique = 2
    AND id_user = $id_eleve
    AND progress_exo = 'rendu'");

    return $request8;
}

//----------------------------Graphique Chaptitre 3 ----------------------------------

function getValideExercice_chap3(){
    $db = connexion_db();
    $id_eleve = $_GET['id_eleve'];
    $request9 = $db->query("SELECT COUNT(*) FROM `rendus_exo`
    LEFT JOIN exercices ON rendus_exo.id_exercice = exercices.id_exercice
    WHERE id_rubrique = 3
    AND id_user = $id_eleve
    AND progress_exo = 'valide'");

    return $request9;
}

function getInProgressExercice_chap3(){
    $db = connexion_db();
    $id_eleve = $_GET['id_eleve'];
    $request10 = $db->query("SELECT COUNT(*) FROM `rendus_exo`
    LEFT JOIN exercices ON rendus_exo.id_exercice = exercices.id_exercice
    WHERE id_rubrique = 3
    AND id_user = $id_eleve
    AND progress_exo = 'en_cours'");

    return $request10;
}

function getReturnedExercice_chap3(){
    $db = connexion_db();
    $id_eleve = $_GET['id_eleve'];
    $request11 = $db->query("SELECT COUNT(*) FROM `rendus_exo`
    LEFT JOIN exercices ON rendus_exo.id_exercice = exercices.id_exercice
    WHERE id_rubrique = 3
    AND id_user = $id_eleve
    AND progress_exo = 'rendu'");

    return $request11;
}

//---------------------------------------- Graphique Chapitre 4 ------------------------------------
function getValideExercice_chap4(){
    $db = connexion_db();
    $id_eleve = $_GET['id_eleve'];
    $request12 = $db->query("SELECT COUNT(*) FROM `rendus_exo`
    LEFT JOIN exercices ON rendus_exo.id_exercice = exercices.id_exercice
    WHERE id_rubrique = 4
    AND id_user = $id_eleve
    AND progress_exo = 'valide'");

    return $request12;
}

function getInProgressExercice_chap4(){
    $db = connexion_db();
    $id_eleve = $_GET['id_eleve'];
    $request13 = $db->query("SELECT COUNT(*) FROM `rendus_exo`
    LEFT JOIN exercices ON rendus_exo.id_exercice = exercices.id_exercice
    WHERE id_rubrique = 4
    AND id_user = $id_eleve
    AND progress_exo = 'en_cours'");

    return $request13;
}

function getReturnedExercice_chap4(){
    $db = connexion_db();
    $id_eleve = $_GET['id_eleve'];
    $request14 = $db->query("SELECT COUNT(*) FROM `rendus_exo`
    LEFT JOIN exercices ON rendus_exo.id_exercice = exercices.id_exercice
    WHERE id_rubrique = 4
    AND id_user = $id_eleve
    AND progress_exo = 'rendu'");

    return $request14;
}

//---------------------------------------- Graphique Chapitre 5 ------------------------------------

function getValideExercice_chap5(){
    $db = connexion_db();
    $id_eleve = $_GET['id_eleve'];
    $request15 = $db->query("SELECT COUNT(*) FROM `rendus_exo`
    LEFT JOIN exercices ON rendus_exo.id_exercice = exercices.id_exercice
    WHERE id_rubrique = 5
    AND id_user = $id_eleve
    AND progress_exo = 'valide'");

    return $request15;
}

function getInProgressExercice_chap5(){
    $db = connexion_db();
    $id_eleve = $_GET['id_eleve'];
    $request16 = $db->query("SELECT COUNT(*) FROM `rendus_exo`
    LEFT JOIN exercices ON rendus_exo.id_exercice = exercices.id_exercice
    WHERE id_rubrique = 5
    AND id_user = $id_eleve
    AND progress_exo = 'en_cours'");

    return $request16;
}

function getReturnedExercice_chap5(){
    $db = connexion_db();
    $id_eleve = $_GET['id_eleve'];
    $request17 = $db->query("SELECT COUNT(*) FROM `rendus_exo`
    LEFT JOIN exercices ON rendus_exo.id_exercice = exercices.id_exercice
    WHERE id_rubrique = 5
    AND id_user = $id_eleve
    AND progress_exo = 'rendu'");

    return $request17;
}



// Met a jour le mdp
function updatePasseWord(){
    $db = connexion_db();
    $id = $_SESSION['id_user'];
    if (isset($_POST['mdp']) AND !empty($_POST['mdp'])){
        $mdp = $_POST['mdp'];
        $request = $db->query("UPDATE `users` SET `password`= '$mdp' WHERE id_user = $id");
        return $request;
    }
}

// Ajoute une annonce 
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

// Récupère la dernière annonce 
function getAnnonce(){
    $db = connexion_db();
    $request2 = $db->query("SELECT * FROM `annonces` ORDER BY `annonces`.`id_annonce` DESC");

    return $request2;
}

// Modifie une annonce 
function getEditAnnonce($data){
    $db = connexion_db();
    $contenue = $_POST['nouvelle_annonce'];
    $id_annonce = $data['id_annonce'];
    $request3 = $db->query("UPDATE annonces SET contenu_annonce = '$contenue' WHERE id_annonce = $id_annonce");
    $data2 = $request3->fetch();

    return $request3;
}

// Supprime une annonce
function deleteAnnonce($data){
    $db = connexion_db();
    $id_annonce = $data['id_annonce'];
    $request4 = $db->query("DELETE FROM `annonces` WHERE id_annonce = $id_annonce");
    $data3 = $request4->fetch();

    return $request4;
}

// Progress Cours 
function  countCours(){
    $db = connexion_db();
    if($_SESSION['status'] == 'professeur'){
        $id_eleve = $_POST['id_eleve'];
    }else{
        $id_eleve = $_SESSION['id_user'];
    }
    $request3 = $db->query("SELECT COUNT(*) FROM `progress_cours` WHERE status_cours = 'lu' AND id_user = $id_eleve");

    return $request3;

}

// Progress total
function countAll(){
    $db = connexion_db();
    if($_SESSION['status'] == 'professeur'){
        $id_eleve = $_POST['id_eleve'];
    }else{
        $id_eleve = $_SESSION['id_user'];
    }
    $request4 = $db->query("SELECT COUNT(*) FROM `rendus_exo` WHERE id_user = $id_eleve AND progress_exo = 'valide' OR progress_exo = 'rendu'");

    return $request4;
}

function countAllExos(){
    $db = connexion_db();
    $request = $db->query("SELECT
    (SELECT COUNT(*) FROM cours) as count1,
    (SELECT COUNT(*) FROM exercices) as count2");

    return $request;
}

function firstCo(){
    $db = connexion_db();
    //$id = $_SESSION['id_user'];
    $request6 = $db->query("SELECT COUNT(*) FROM `progress_cours` WHERE id_user = 3");
    

    return $request6;
}

function insertFirstCo(){
    $db = connexion_db();
    $request7 = $db->query("SELECT COUNT(*) FROM `cours`");
    $cours = $request7->fetch();
    $cours = intval($cours[0]);
    $i = 1;
    $id = $_SESSION['id_user'];
    while($i <= $cours){
        $request8 = $db->query("INSERT INTO `progress_cours`(`id_cours`, `id_user`, `status_cours`) VALUES ($i, $id,'non_lu')");
        $request8->fetch();
        $i++;
    }
    return $request8;
}
?>