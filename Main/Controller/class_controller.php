<?php

function showClasses() {
    if(!isset($_POST['show_chap']) | isset($_POST['Next'])) $_POST['show_chap'] = 'Selectionner un chapter';
    $request1 = nameClass();
    $request = GetChapterClass();
    $request2 = getcontents();
    if($_SESSION['status'] == 'student') readOrNot();
    require('View/class.php');
}

function knowID() {
    $request = getChapterClass();
    while($data = $request->fetch()) {
        $name_chap = $data['chapter_name'];
        
        if($_POST['show_chap'] == $name_chap) {
            $id_chap = $data['id_chapter'];
        }
    }
    $request->closeCursor();
    if(isset($id_chap)) return $id_chap;
    else return $id_chap = 0;
}

function maxChapter() {
    //Permet de savoir le namebre max de chapter du cours actuel
    $request_max = getMaxChapter();
    $i = 0;
    while($data = $request_max->fetch()) {
        $i++;
    }
    return $i;
}


function nextChapter() {
    $max = maxChapter();
    $end = false;
    if($max == $_POST['index_class']) {
        $end = true;
    }
    return $end;
}

function modifChapter()  {
    //Permet au prof de modifier le name d'un chapter
    if(($_POST['chapter_name']) !== 'Selectionner un chapter') {
        $req = requestModifChapter();
        $nv_name = $_POST['chap'];
        $req->execute(array(
            'nv_name' => $nv_name
        ));
        $req->closeCursor();
    }
    else{
        echo "Vraiment ?";
    }
}

function readOrNot() {
    $request_read = checkRead();
    while($data = $request_read->fetch()) {
        $id_class = $data['id_class'];
        if($id_class == $_POST['id_class']) {
            $status = $data['status_class'];
            break;
        }
    }
    $request_read->closeCursor();
  
    if($status == 'non_lu') $_POST['status_class'] = "Marquer le class comme lu";
    else $_POST['status_class'] = "Marquer le class comme non lu";
    
}

function changeRead() {
    if(($_POST['Read']) == 'Marquer le class comme lu') {
        $req = updateRead();
        $nv_status = 'lu';
        $req->execute(array(
            'nv_status' => $nv_status
        ));
        $req->closeCursor();
    }
    else{
        $req = updateRead();
        $nv_status = 'non_lu';
        $req->execute(array(
            'nv_status' => $nv_status
        ));
        $req->closeCursor();
    }
}

function suppChap() {
    $request =  reqDeleteChap();
}

function hiddenBtn() {
    $id_chap = knowID();
    //Boutons cachés pour l'affichage des class
    ?>
    <input type="hidden" name="id_chap" value="<?php echo $id_chap?>">
    <input type="hidden" name="index_class" value="<?php echo $_POST['index_class']?>">
    <input type="hidden" name="id_class" value="<?php echo $_POST['id_class']?>">
    <input type="hidden" name="id_rubrics" value="<?php echo $_POST['id_rubrics']?>">
    <input type="hidden" name="name_class" value="<?php echo $_POST['name_class']?>">
    <input type="hidden" name="chapter_name" value="<?php echo $_POST['show_chap']?>">
    <?php
}

function hiddenBtnNext() {
    $id_chap = knowID();
    //Boutons cachés pour l'affichage des class
    $index_class = $_POST['index_class'] + 1;
    $id_class = $_POST['id_class'] + 1;
    ?>
    <input type="hidden" name="id_chap" value="<?php echo $id_chap?>">
    <input type="hidden" name="index_class" value="<?php echo $index_class ?>">
    <input type="hidden" name="id_rubrics" value="<?php echo $_POST['id_rubrics']?>">
    <input type="hidden" name="id_class" value="<?php echo $_POST['id_class']?>">
    <input type="hidden" name="name_class" value="<?php echo $_POST['name_class']?>">
    <input type="hidden" name="chapter_name" value="<?php echo $_POST['show_chap']?>">
    <?php
}

?>