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
        $id = $data['index_cours'];
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
        echo "<div class='basic_box red_section red_exo'>
        <svg class='box-nav_exo'>
            <use xlink:href='$_POST[SVG]'></use>
        </svg>
        <h3 class='heading_red heading_exo'>
        '$name_class'
        </h3>
        <div class='status'>
            <p class='message'>
            Cours non commencée
            </p>
            <svg class='box-nav_exo'>
                <use xlink:href='Public/svg/symbol-defs.svg#icon-circle-with-cross'></use>
            </svg>
        </div>  
        <form action='index.php?action=class.php' class='form_mdp' method='POST'>
            <input type='hidden' name='nom_cours' value='$name_class' id='btn'>
            <input type='hidden' name='id_cours' value='$id' id='btn'>
            <input type='submit' class='btn btn--green btn_section' name='Afficher' value='Lire cours' id='btn'>
        </form>
    </div>";
    $i++;
    }
    $answer->closeCursor();
    echo "</div></section>";
    require('View/footer.php');
}






?>