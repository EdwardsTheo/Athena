<?php

function updateRead() {
    $db = connect_start();
   
    $req = $db->prepare('UPDATE progress_classes
    SET status_class = :nv_status
    WHERE id_user = \''.$_SESSION['id_user'].'\'
    AND id_class = \''.htmlspecialchars($_POST['id_class']).'\'');
    return $req;
}

function requestModifChapter() {
    $db = connect_start();
    
    $req = $db->prepare('UPDATE chapter
    SET chapter_name = :nv_name
    WHERE chapter_name = \''.htmlspecialchars($_POST['chapter_name']).'\'');
    return $req;
}

function reqChangeNameChap() {
    $db = connect_start();
    $req = $db->prepare('UPDATE class
    SET name_class = :nv_name
    WHERE id_class = \''.htmlspecialchars($_POST['id_class']).'\'');
    return $req;
}

function verifyEx($chapter, $instruction, $name, $resources, $btn, $o_name, $index) {
    $db = connect_start();
    if($o_name == ""){
        $o_name = $name;
    }
    $request = $db->prepare("SELECT id_exercice FROM exercices WHERE name_exercice = '$o_name'");
    $request->execute();
    $result = $request->fetchAll();
    if ($result){
        if ($btn == "modif") {
            $id_ex = $result[0][0];
            $db->exec("UPDATE exercices SET id_exercice='$id_ex',id_rubrics='$chapter',index_exercice='$index',name_exercice='$name',consigne_exercice='$instruction',output=NULL WHERE name_exercice = '$o_name'");
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

function exoValide() {
    $db = connect_start();
    $id_student = $_POST['id_student']; 
    $id_ex = $_POST['id_ex'];
    $li = "UPDATE `return_exo` SET progress_exo = 'valide' WHERE id_user='$id_student' AND id_exercice='$id_ex'";
    $request = $db->exec($li);
}

?>