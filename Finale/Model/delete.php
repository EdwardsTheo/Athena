<?php

require("connect_db.php");

function reqDeleteChap() {
    $db = connect_start();

    $request = $db->exec('SET FOREIGN_KEY_CHECKS = 0;
    DELETE FROM chapter
    WHERE chapter_name = \''.$_POST['chapter_name'].'\'');
}

function reqDeleteProgressClass() {
    $db = connect_start();
    $request = $db->exec('DELETE FROM progress_classes
    WHERE id_class = \''.$_POST['id_class'].'\'');
}

function reqDeleteChapterClass() {
    $db = connect_start();
    $request = $db->exec('DELETE FROM chapter
    WHERE index_class = \''.$_POST['index_class'].'\'
    AND id_rubrics = \''.$_POST['id_rubrics'].'\'');
}

function reqSuppClass() {
    $db = connect_start();

    $request = $db->exec('DELETE FROM class
    WHERE id_class = \''.$_POST['id_class'].'\'');
}

function deletenews(){
    $db = connect_start();
    $id_news = $_POST['id_news'];
    $request4 = $db->query("DELETE FROM `news` WHERE id_news = '$id_news'");
    //$data3 = $request4->fetch();

    return $request4;
}

function deleteAll(){
    $db = connect_start();
    $request = $db->query("DELETE FROM news;
    DELETE FROM progress_   class;
    DELETE FROM return_evals;
    DELETE FROM return_exos;
    DELETE FROM user WHERE status_user = 'student'; 
    ");
    $request->fetch();

    return $request;
}

function addResources($resources, $id, $btn){
    $db = connect_start();
    if($btn == "modif"){
        $db->exec("DELETE FROM links WHERE id_exercice = '$id'");
        $db->exec("ALTER TABLE links AUTO_INCREMENT = 0");
    }
    if(is_array($resources)==true){
        $num = array_key_last($resources);

        for ($i = 0; $i<=$num; $i++) {
            $db->exec("INSERT INTO links VALUES (NULL,'$id', '$resources[$i]')");
        }
        header("Location: index.php?action=home_exercice.php");
        exit();
    }
    else{
        $db->exec("INSERT INTO links VALUES (NULL, '$id', '$resources')");
        header("Location: index.php?action=home_exercice.php");
        exit();
    }

}

function deleteEx($id_ex){
    $db = connect_start();
    $db->exec("DELETE FROM exercices WHERE id_exercice = '$id_ex'");
    $db->exec("ALTER TABLE exercices AUTO_INCREMENT = 0");
}

 /*Supprime les links d'un exercice*/
function deletelinks($id_ex){
    $db = connect_start();

    $db->exec("DELETE FROM links WHERE id_exercice = '$id_ex'");
    $db->exec("ALTER TABLE links AUTO_INCREMENT = 0");
}

function reqSuppExoEval() {
    $db = connect_start();
    $request = $db->exec('DELETE FROM exos_eval
    WHERE id_exo_eval = \''.$_POST['id_exo'].'\'');
}


?>