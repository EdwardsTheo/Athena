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
            echo "<div class=\"red_section red_exo\">
            <svg class=\"box-nav_exo\">
                <use xlink:href=\"../Public/svg/symbol-defs.svg#icon-javascript\"></use>
            </svg>
            <h3 class=\"heading_red heading_exo\">
            Valeurs et variables
            </h3>
            <div class=\"status\">
                <p class=\"message\">
                Cours lu
                </p>
                <svg class=\"box-nav_exo\">
                    <use xlink:href=\"../Public/svg/symbol-defs.svg#icon-check\"></use>
                </svg>
            </div>  
            <form action=\"#\" class=\"form_mdp\">
                <input type=\"submit\" class=\"btn btn--green btn_section \" name=\"$nom_cours\" value=\"$nom_cours\" id=\"btn\">
            </form>
        </div>";
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
                echo '<br/>';
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