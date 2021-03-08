<?php

require("connect_db.php");

function getUser() {
    $db = connect_start();
    $request = $db->query('SELECT * FROM users');

    return $request;
}
function getInfoStudent() {
    $db = connect_start();
    $request = $db->query('SELECT * FROM users
    WHERE status_user = "student"');

    return $request;
}
// Récupère les class 
function getClass() {
    $db = connect_start();
    $answer = $db->query('SELECT * FROM class WHERE id_rubrics = "'.$_POST['rubric'].'"');

    return $answer;
}

function selectWithName() {
    $db = connect_start();

    $request = $db->query('SELECT * FROM class WHERE name_class = \''.htmlspecialchars($_POST['name_class']).'\'');
    return $request;
}

function getMaxChapter() {
    //Requete pour connaitre le maximum de cours
    $db = connect_start();
    $request = $db->query('SELECT id_chapter FROM chapter
    WHERE index_class = \''.htmlspecialchars($_POST['index_class']).'\'');
    return $request;
}

function getcontents() {
    $db = connect_start();
    $request = $db->query('SELECT contents_chapter, chapter_name FROM chapter');
    return $request;
}


function nameClass() {
    $db = connect_start();
    $request = $db->query('SELECT co.name_class 
    FROM chapter AS c
    LEFT JOIN class AS co
    ON co.index_class = c.index_class
    WHERE co.index_class =  \''.htmlspecialchars($_POST['index_class']).'\'
    AND co.id_rubrics = \''.htmlspecialchars($_POST['id_rubrics']).'\'');
    return $request;
}

// Récupère les rubrics 
function getRub() {
    $db = connect_start(); 
    $request = $db->query('SELECT name_rubric, svg, id_rubrics FROM rubrics');

    return $request;
}

function checkRead() {
    $db = connect_start();
    $request = $db->query('SELECT status_class, id_class
    FROM progress_classes
    WHERE id_user = \''.$_SESSION['id_user'].'\'');
    return $request;
}

function checkReadrubric($id_rubrics) {
    $db = connect_start();
    if(isset($_SESSION['id_user'])) {
        $request = $db->query('SELECT p.status_class, p.id_class
        FROM progress_classes AS p
        LEFT JOIN class AS co
        ON p.id_class = co.id_class
        WHERE id_user = \''.$_SESSION['id_user'].'\'
        AND id_rubrics = \''.$id_rubrics.'\'');
        return $request;
    }
}

?>