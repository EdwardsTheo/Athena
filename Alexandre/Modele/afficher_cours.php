<?php 
    require('connexion_bdd.php');
    $bdd = connexion_bdd();

    ///--------Afficher rubriques--------////

    function classes($answer) {
        while ($data = $answer->fetch()) {
            $delete = $data['nom_cours'];
            unset($data[array_search($delete,$data)]);
            $nom_cours = implode($data);
            $nom_cours = str_replace(" ","",$nom_cours);
            echo "<tr><form method='GET' action=''><input type='submit' value=".$nom_cours." name=".$nom_cours."></form><tr> ";
        }
    }


    if (isset($_GET['cours_1'])) {
        for ($i=1;$i<7;$i++){
            $answer = $bdd->query('SELECT`nom_cours` FROM `cours` WHERE id_chapitre = 1 AND index_cours = "'.$i.'"');
            classes($answer);
        }
    }
    elseif (isset($_GET['cours_2'])) {
        for ($i=1;$i<13;$i++) {
            $answer = $bdd->query('SELECT`nom_cours` FROM `cours` WHERE id_chapitre = 2 AND index_cours = "'.$i.'"');
            classes($answer);
            if ($i == 4 OR $i == 8) {
                echo '</tr>';
            }
        }
    }
    elseif (isset($_GET['cours_3'])) {
        for ($i=1;$i<4;$i++) {
            $answer = $bdd->query('SELECT`nom_cours` FROM `cours` WHERE id_chapitre = 3 AND index_cours = "'.$i.'"');
            classes($answer);
        }
    }
    elseif (isset($_GET['cours_4'])) {
        $answer = $bdd->query('SELECT`nom_cours` FROM `cours` WHERE id_chapitre = 4 AND index_cours = 1');
        classes($answer);
    }
    elseif (isset($_GET['cours_5'])) {
        for ($i=1;$i<3;$i++){
            $answer = $bdd->query('SELECT`nom_cours` FROM `cours` WHERE id_chapitre = 5 AND index_cours = "'.$i.'"');
            classes($answer);
        }
    }
?>