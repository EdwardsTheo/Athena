<?php

function reqAddClass() {
    $db = connect_start();

    $req = $db->prepare('INSERT INTO class(id_rubrics, index_class, name_class)
    VALUES(:id_rubrics, :index_class, :name_class)');

    return $req;
}

function reqAddNewChapter() {
    $db = connect_start();
    $req = $db->prepare('INSERT INTO chapter(index_class, id_rubrics, chapter_name, contents_chapter)
    VALUES(:index_class, :id_rubrics, :chapter_name, :contents_chapter)');
    return $req;
}

function reqAddExoEval() {
    $db = connect_start();
    $req = $db->prepare('INSERT INTO exos_eval(id_test, name_exo_eval, contents_exo_eval)
    VALUES(:id_test, :name_exo_eval, :contents_exo_eval)');
    return $req;
}

function reqModifExoEval() {
    $db = connect_start(); 
    $req = $db->prepare('UPDATE exos_eval
    SET name_exo_eval = :nv_name, contents_exo_eval = :nv_contents
    WHERE id_exo_eval = \''.$_POST['id_exo'].'\'');

    return $req;
}

function reqModifEval() {
    $db = connect_start(); 
    $req = $db->prepare('UPDATE test
    SET status = :nv_status, heure_start = :hD, heure_fin = :hF, date = :setDate
    WHERE id_test = \''.$_POST['id_eval'].'\'');

    return $req;
}

function reqModifProgress($id_eval) {
    $db = connect_start(); 
    $req = $db->prepare('UPDATE test
    SET status = :nv_status
    WHERE id_test = \''.$id_eval.'\'');

    return $req;
}

function updateHour(){
    $db = connect_start();
    $id = $_SESSION['id_user'];
    $request = $db->query("UPDATE `users` SET `heure_connexion` = NOW() WHERE `users`.`id_user` = $id");

    return $request;
}

function updatePasseWord(){
    $db = connect_start();
    if (isset($_POST['mdp']) AND !empty($_POST['mdp'])){
        $id = $_SESSION['id_user'];
        $mdp = $_POST['mdp'];
        $request = $db->query("UPDATE `users` SET `password`= '$mdp' WHERE id_user = '$id'");
        return $request;
    }
}

function getEditnews(){
    $db = connect_start();
    $contentse = $_POST['nouvelle_news'];
    $id_news = $_POST['id_news'];
    $request3 = $db->query("UPDATE news SET contents_news = '$contentse' WHERE id_news = '$id_news'");
    //$data2 = $request3->fetch();

    return $request3;
}

function fileToBddExo($file, $id_ex){
    $db = connect_start();
    $id_user = $_SESSION['id_user'];
    $req = "UPDATE return_exo SET contents_return = '$file', progress_exo = 'return' WHERE id_exercice = '$id_ex' AND id_user = '$id_user'";
    $request = $db->prepare($req);
    $request->execute();
}


?>