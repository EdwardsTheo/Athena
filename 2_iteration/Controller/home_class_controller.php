<?php

function showClass() {
    $request = getRub();
    require('View/home_class.php');
}

function showSection($answer) {
    classes($answer);
}

function classes($answer) {
    $i = 0;
    while ($data = $answer->fetch()) {
        $name_class = $data['nom_cours'];
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
        echo "<div class=\"basic_box red_section red_exo\">
        <svg class=\"box-nav_exo\">
            <use xlink:href='$_GET[SVG]'></use>
        </svg>
        <h3 class=\"heading_red heading_exo\">
        \"$name_class\"
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
            <input type=\"submit\" class=\"btn btn--green btn_section \" name=\"$name_class\" value=\"Lire cours\" id=\"btn\">
        </form>
    </div>";
    $i++;
    }
    $answer->closeCursor();
    echo "</div></section>";
    require('View/footer.php');
}






?>