<?php
 
//var_dump($_POST);

function showClasses() {
    if(!isset($_POST['Afficher_chap']) | isset($_POST['Next'])) $_POST['Afficher_chap'] = 'Selectionner un chapitre';
    $request1 = nameClass();
    $request = GetChapterClass();
    $request2 = getContenu();
    readOrNot();
    require('View/class.php');
}

function knowID() {
    $request = getChapterClass();
    while($data = $request->fetch()) {
        $name_chap = $data['nom_chapitre'];
        
        if($_POST['Afficher_chap'] == $name_chap) {
            $id_chap = $data['id_chapitre'];
        }
    }
    $request->closeCursor();
    if(isset($id_chap)) return $id_chap;
    else return $id_chap = 0;
}

function maxChapter() {
    //Permet de savoir le nombre max de chapitre du cours actuel
    $request_max = getMaxChapter();
    $i = 0;
    while($data = $request_max->fetch()) {
        $i++;
    }
    return $i;
}


function nextChapter() {
    $max = maxChapter();
    echo $max;
    $end = false;
    if($max == $_POST['index_cours']) {
        $end = true;
    }
    return $end;
}

function modifChapter()  {
    //Permet au prof de modifier le nom d'un chapitre
    if(($_POST['nom_chapitre']) !== 'Selectionner un chapitre') {
        $req = requestModifChapter();
        $nv_nom = $_POST['chap'];
        $req->execute(array(
            'nv_nom' => $nv_nom
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
        $id_class = $data['id_cours'];
        if($id_class == $_POST['index_cours']) {
            $status = $data['status_cours'];
            break;
        }
    }
    $request_read->closeCursor();
    if($status == 'non_lu') $_POST['status_cours'] = "Marquer le cours comme lu";
    else $_POST['status_cours'] = "Marquer le cours comme non lu";

}

function changeRead() {
    if(($_POST['Read']) == 'Marquer le cours comme lu') {
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

function hiddenBtn() {
    $id_chap = knowID();
    //Boutons cachés pour l'affichage des cours
    ?>
    <input type="hidden" name="id_chap" value="<?php echo $id_chap?>">
    <input type="hidden" name="index_cours" value="<?php echo $_POST['index_cours']?>">
    <input type="hidden" name="id_rubrique" value="<?php echo $_POST['id_rubrique']?>">
    <input type="hidden" name="nom_cours" value="<?php echo $_POST['nom_cours']?>">
    <?php
}

function hiddenBtnNext() {
    $id_chap = knowID();
    //Boutons cachés pour l'affichage des cours
    $index_cours = $_POST['index_cours'] + 1;
    ?>
    <input type="hidden" name="id_chap" value="<?php echo $id_chap?>">
    <input type="hidden" name="index_cours" value="<?php echo $index_cours ?>">
    <input type="hidden" name="id_rubrique" value="<?php echo $_POST['id_rubrique']?>">
    <input type="hidden" name="nom_cours" value="<?php echo $_POST['nom_cours']?>">
    <?php
}

?>