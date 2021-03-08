<?php

function startAddClass() {
    $request = getRub();
    if(isset($_POST['name_rubric'])) $request_class = getClass();
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
    $id_class = MaxClass();
    $new_id_class = $id_class + 1;
    $req = reqAddClass();

    $req->execute(array(
        'id_rubrics' => $_POST['rubric'],
        'index_class' => $new_id_class,
        'name_class' => $_POST['new_name_class']
    ));
    unset($_POST);
}

function addNewChapter() {
    $req = reqAddNewChapter();

    $req->execute(array(
        'index_class' => $_POST['index_class'], 
        'id_rubrics' => $_POST['id_rubrics'], 
        'chapter_name' => $_POST['chapter_title'], 
        'contents_chapter' => $_POST['url_chapter']
    
    ));
    unset($_POST);
}

?>