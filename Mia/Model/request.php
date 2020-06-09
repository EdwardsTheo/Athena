<?php
require("connect_db.php");
//require("connexion_sql.php");

function getUser() {
    $db = connexion_db();
    //require("connexion_sql.php");
    $request = $db->query('SELECT * FROM users');
    return $request;
}

function getClass() {
    $db = connexion_db();
    //require("connexion_sql.php");
    $answer = $db->query('SELECT * FROM cours WHERE id_rubrique = "'.htmlspecialchars($_POST['rubrique']).'"');
    
    return $answer;
}

function selectWithName() {
    $db = connexion_db();
    //require("connexion_sql.php");
    $request = $db->query('SELECT * FROM cours WHERE nom_cours = \''.htmlspecialchars($_POST['nom_cours']).'\'');

    return $request;
}

function getMaxChapter() {
    //Requete pour connaitre le maximum de cours
    $db = connexion_db();
    //require("connexion_sql.php");
    $request = $db->query('SELECT id_chapitre FROM chapitres
    WHERE index_cours = \''.htmlspecialchars($_POST['index_cours']).'\'');
 
    return $request;
}

function getContenu() {
    $db = connexion_db();
    //require("connexion_sql.php");
    $request = $db->query('SELECT contenu_chapitre, nom_chapitre FROM chapitres');
    return $request;
}

function nameClass() {
    $db = connexion_db();
    //require("connexion_sql.php");
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
    //require("connexion_sql.php");
    $request = $db->query('SELECT nom_rubrique, svg, id_rubrique FROM rubriques');
    return $request;
}

function checkRead() {
    $db = connexion_db();
    //require("connexion_sql.php");
    $request = $db->query('SELECT status_cours, id_cours
    FROM progress_cours
    WHERE id_user = \''.$_SESSION['id_user'].'\'');
    return $request;
}

function checkReadRubrique($id_rubrique) {
    $db = connexion_db();
    //require("connexion_sql.php");
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
   //require("connexion_sql.php");
    $req = $db->prepare('UPDATE progress_cours
    SET status_cours = :nv_status
    WHERE id_user = \''.$_SESSION['id_user'].'\'
    AND id_cours = \''.htmlspecialchars($_POST['id_cours']).'\'');
    return $req;
}
function getChapterClass() {
    $db = connexion_db();
    //require("connexion_sql.php");
    $request = $db->query('SELECT c.nom_chapitre, co.id_rubrique, c.id_chapitre
    FROM chapitres AS c
    LEFT JOIN cours AS co
    ON c.index_cours = co.index_cours
    WHERE c.index_cours = \''.htmlspecialchars($_POST['index_cours']).'\'
    AND co.id_rubrique = \''.htmlspecialchars($_POST['id_rubrique']).'\'');
    return $request;
}
function requestModifChapter() {
    $db = connexion_db();
    //require("connexion_sql.php");
    $req = $db->prepare('UPDATE chapitres
    SET nom_chapitre = :nv_nom
    WHERE nom_chapitre = \''.htmlspecialchars($_POST['nom_chapitre']).'\'');
    return $req;
}


function getLastClass($id) {
    $db = connexion_db();
    //require("connexion_sql.php");
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
    //require("connexion_sql.php");
    $req = $db->prepare('INSERT INTO cours(id_rubrique, index_cours, nom_cours)
    VALUES(:id_rubrique, :index_cours, :nom_cours)');

    return $req;
}

function reqAddNewChapter() {
    $db = connexion_db();
    //require("connexion_sql.php");
    $req = $db->prepare('INSERT INTO chapitres(index_cours, id_rubrique, nom_chapitre, contenu_chapitre)
    VALUES(:index_cours, :id_rubrique, :nom_chapitre, :contenu_chapitre)');
    return $req;
}
/*––––––––––––––––––––––––––––––ADD EXERCICE––––––––––––––––––*/

/*Verifie si un exercice du même nom n'est pas déjà existant ou modifie juste l'exercice */
function verifyEx($chapter, $instruction, $name, $resources, $btn, $o_name, $index) {
    $db = connexion_db();
    //require("connexion_sql.php");
    if($o_name == ""){
        $o_name = $name;
    }
    $request = $db->prepare("SELECT id_exercice FROM exercices WHERE nom_exercice = '$o_name'");
    $request->execute();
    $result = $request->fetchAll();
    if ($result){
        if ($btn == "modif") {
            $id_ex = $result[0][0];
            $db->exec("UPDATE exercices SET id_exercice='$id_ex',id_rubrique='$chapter',index_exercice='$index',nom_exercice='$name',consigne_exercice='$instruction',output=NULL WHERE nom_exercice = '$o_name'");
            addResources($resources, $id_ex, $btn);
        }
        else {
            header("Location: index.php?action=add_exercice.php&error=7");
            exit();
        }
    }
    else{
        addEx($chapter, $instruction, $name, $resources, $btn, $index);
    }
}

/*Ajoute un exercice*/
function addEx($chapter, $instruction, $name, $resources, $btn, $index){
    $db = connexion_db();
    //require("connexion_sql.php");
    $db->exec("INSERT INTO exercices VALUES (NULL,'$chapter','$index','$name','$instruction',NULL)");
    getEx($name, $resources, $btn);
}

/*Recherche l'id de l'exercice que l'on vient d'ajouter*/
function getEx($name, $resources, $btn){
    $db = connexion_db();
    //require("connexion_sql.php");
    $request = $db->prepare("SELECT id_exercice FROM exercices WHERE nom_exercice LIKE '$name'");
    $request->execute();
    $result = $request->fetchAll();
    $id = $result["0"]["id_exercice"];
    addResources($resources, $id, $btn);
}

/*ajoute les ressources*/
function addResources($resources, $id, $btn){
    $db = connexion_db();
    //require("connexion_sql.php");
    if($btn == "modif"){
        $db->exec("DELETE FROM liens WHERE id_exercice = '$id'");
        $db->exec("ALTER TABLE liens AUTO_INCREMENT = 0");
    }
    if(is_array($resources)==true){
        $num = array_key_last($resources);

        for ($i = 0; $i<=$num; $i++) {
            $db->exec("INSERT INTO liens VALUES (NULL,'$id', '$resources[$i]')");
        }
        header("Location: index.php?action=home_exercice.php");
        exit();
    }
    else{
        $db->exec("INSERT INTO liens VALUES (NULL, '$id', '$resources')");
        header("Location: index.php?action=home_exercice.php");
        exit();
    }

}

/*–––––––––––––––––––––––––HOME EXERCICE ET EXERCICE––––––––––––––––––––––––––––––––*/

/*Selectionne tous les exercices d'une rubrique*/
function getExWanted($rubrique){
    $db = connexion_db();
    //require("connexion_sql.php");
    $answer = $db->prepare('SELECT * FROM exercices WHERE id_rubrique = '.$rubrique.'');
    $answer->execute();
    return $answer;
}

/*Selectionne les id des ressources liées à un exercice demandé*/
function getIdResources($id_exercice){
    $db = connexion_db();
    //require("connexion_sql.php");
    $request = $db->prepare('SELECT url_ressource FROM liens WHERE id_exercice = "'.$id_exercice.'"');
    $request->execute();
    return $request;
}

/*Selectionne les noms des ressources voulues*/
 function getResources($id_rubrique, $id_class){
    $db = connexion_db();
    //require("connexion_sql.php");
    $request = $db->prepare("SELECT * FROM cours WHERE id_rubrique = '$id_rubrique' AND index_cours = '$id_class'");
    $request->execute();
    return $request;
 }

/*Supprime un exercice*/
 function deleteEx($id_ex){
    $db = connexion_db();
    //require("connexion_sql.php");
    $db->exec("DELETE FROM exercices WHERE id_exercice = '$id_ex'");
    $db->exec("ALTER TABLE exercices AUTO_INCREMENT = 0");
 }

 /*Supprime les liens d'un exercice*/
 function deleteLiens($id_ex){
     $db = connexion_db();
     //require("connexion_sql.php");
     $db->exec("DELETE FROM liens WHERE id_exercice = '$id_ex'");
     $db->exec("ALTER TABLE liens AUTO_INCREMENT = 0");
 }

/*Verifie le statut des exercices pour voir s'il y en a un en cours*/
 function verifyStatusEx($id_user, $id_ex){
    $db = connexion_db();
    //require("connexion_sql.php");
    if($_SESSION["status"] == "eleve"){
        $request = $db->prepare("SELECT * FROM rendus_exo WHERE id_user = '$id_user'");
        $request->execute();
        $result = $request->fetchAll();
        if(empty($result)){
            pasLuEnCours($id_user, $id_ex);
        }
    }  
 }

 /*Passe le statut d'un exercice à en_cours*/
 function pasLuEnCours($id_user, $id_ex){
    $db = connexion_db();
    //require("connexion_sql.php");
    $db->exec("INSERT INTO rendus_exo VALUES (NULL,'$id_user','$id_ex',NULL,'en_cours')");
 }

 /*Verifie si un exercice supperieur existe*/
 function verifyIssetExSup($index, $id_ru){
    $db = connexion_db();
    //require("connexion_sql.php");
    $request = $db->prepare("SELECT * FROM exercices WHERE index_exercice='$index' AND id_rubrique='$id_ru'");
    $request->execute();
    $result = $request->fetchAll();
    if($result){
        $type_btn = "submit";
    }
    
    return $type_btn;
 }

function verifyIssetExSupRub($id_ru){
    $db = connexion_db();
    //require("connexion_sql.php");
    $request = $db->prepare("SELECT * FROM exercices WHERE index_exercice = '1' AND id_rubrique = '$id_ru2'");
    $request->execute();
    $result = $request->fetchAll();
    if($result){
        $type_btn = "submit2";
    }
    else {
        $type_btn = "hidden";
    }
}

function findIndex($rubrique){
    $db = connexion_db();
    //require("connexion_sql.php");
    $request = $db->query("SELECT * FROM exercices WHERE id_rubrique = '$rubrique'");
    return $request;
}

function showCurrentEx($id_user){
    $db = connexion_db();
    //require("connexion_sql.php");
    $request = $db->query("SELECT RE.id_exercice, E.index_exercice, E.id_rubrique, E.nom_exercice, RU.nom_rubrique FROM rendus_exo as RE JOIN exercices as E ON RE.id_exercice = E.id_exercice JOIN rubriques as RU on E.id_rubrique = RU.id_rubrique WHERE RE.id_user = '$id_user' AND RE.progress_exo = 'en_cours'");
    return $request;
}


?>