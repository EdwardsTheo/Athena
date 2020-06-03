<?php

function showClasses() {
    if(!isset($_POST['Afficher_chap'])) $_POST['Afficher_chap'] = 'Selectionner un chapitre';
    $request = GetChapterClass();
    require('View/class.php');
}

function printButton() {

}

?>