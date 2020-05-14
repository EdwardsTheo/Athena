<?php 
    require('connexion_bdd.php');
    $bdd = connexion_bdd();

    ///--------Afficher rubriques--------////

    function classes($answer) {
        echo " <div class='box_row'>";
        while ($data = $answer->fetch()) {
            $name_rubrik = $data['nom_rubrique'];
            echo "<div class=\"red_section red_exo\">
            <svg class=\"box-nav_exo\">
                <use xlink:href='$_GET[SVG]'></use>
            </svg>
            <h3 class=\"heading_red heading_exo\">
            \"$name_rubrik\"
            </h3>
            <div class=\"status\">
                <p class=\"message\">
                Rubrique non commencée
                </p>
                <svg class=\"box-nav_exo\">
                    <use xlink:href=\"../Public/svg/symbol-defs.svg#icon-circle-with-cross\"></use>
                </svg>
            </div>  
            <form action=\"#\" class=\"form_mdp\">
                <input type=\"submit\" class=\"btn btn--green btn_section \" name=\"$name_rubrik\" value=\"Lire cours\" id=\"btn\">
            </form>
        </div>";
        }
        echo " </div>";
    }

    function classesNode($answer) {
        $i = 0;
        while ($data = $answer->fetch()) {
            $name_rubrik = $data['nom_rubrique'];
            if($i == 0) {
                echo "<div class='box_row'>";
            }
            elseif($i == 6) {
                echo "</div>";
                echo "<div class='box_row'>";
            }
            elseif($i == 9) {
                echo "</div>";
                echo "<div class='box_row'>";
            }
            echo "<div class=\"red_section red_exo\">
            <svg class=\"box-nav_exo\">
                <use xlink:href='$_GET[SVG]'></use>
            </svg>
            <h3 class=\"heading_red heading_exo\">
            \"$name_rubrik\"
            </h3>
            <div class=\"status\">
                <p class=\"message\">
                Rubrique non commencée
                </p>
                <svg class=\"box-nav_exo\">
                    <use xlink:href=\"../Public/svg/symbol-defs.svg#icon-circle-with-cross\"></use>
                </svg>
            </div>  
            <form action=\"#\" class=\"form_mdp\">
                <input type=\"submit\" class=\"btn btn--green btn_section \" name=\"$name_rubrik\" value=\"Lire cours\" id=\"btn\">
            </form>
        </div>";
        $i++;
        }
        echo "</div>";
    }


    if (isset($_GET['afficher'])) {
        $answer = $bdd->query('SELECT`nom_rubrique` FROM `rubriques` WHERE id_chapitre = "'.$_GET['rubrique'].'"');
        if($_GET['rubrique'] == 2) classesNode($answer);
        else classes($answer);
    }
    
?>