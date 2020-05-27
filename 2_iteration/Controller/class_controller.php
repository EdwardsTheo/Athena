<?php

function showClasses() {
    var_dump($_POST);
    if(!isset($_POST['Afficher_chap']) | isset($_POST['Next'])) $_POST['Afficher_chap'] = 'Selectionner un chapitre';
    $request1 = nameClass();
    $request = GetChapterClass();
    $request2 = getContenu();
    readOrNot();
    require('View/class.php');
}

function hiddenBtn() {
    //Boutons cachés pour l'affichage des cours
    ?>
    <input type="hidden" name="index_cours" value="<?php echo $_POST['index_cours']?>">
    <input type="hidden" name="id_rubrique" value="<?php echo $_POST['id_rubrique']?>">
    <input type="hidden" name="nom_cours" value="<?php echo $_POST['nom_cours']?>">
    <?php
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

function addOne() {
    //Ajoute + 1 à la rubrique pour passer au cours suivants
    $max = maxChapter();
    if($max == $_POST['index_cours']) {
        echo 'Bravo !';
    }
    else {
        $_POST['index_cours'] = $_POST['index_cours'] + 1;
    }
}

function modifChapter()  {
    //Permet au prof de modifier le nom d'un chapitre
    if(($_POST['nom_chapitre']) !== 'Selectionner un chapitre') {
        $req = req_modifChapter();
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
        $status = $data['status_cours'];
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

?>