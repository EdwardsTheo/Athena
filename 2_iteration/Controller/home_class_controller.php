<?php


function showClass() {
    $request = getRub();
    require('View/home_class.php');
}

function showSection($answer) {
    classes($answer);
}

function checkStatus($id_rubrique, $id_cours) {
    $request = checkReadRubrique($id_rubrique); 
    while($data = $request->fetch()) {
        $status = $data['status_cours'];
        $p_id_cours = $data['id_cours'];
        if($id_cours == $p_id_cours) {
            if($status == 'lu') return 'icon-check';
            else return 'icon-circle-with-cross';
        }
    }
}

function checkSVG($svg) {
    if($svg == 'icon-check') return $phrase = 'Cours lu';
    else return $phrase = 'Cours non lu';
}

function classes($answer) {
    $i = 0;
    while($data = $answer->fetch()) {
        $name_class = $data['nom_cours'];
        $id = $data['index_cours'];
        $id_cours = $data['id_cours'];
        $id_rubrique = $data['id_rubrique'];
        $svg = checkStatus($id_rubrique, $id_cours);
        $phrase = checkSVG($svg); 
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
            $phrase
            </p>
            <svg class='box-nav_exo'>
                <use xlink:href='Public/svg/symbol-defs.svg#$svg'></use>
            </svg>
        </div>  
        <form action='index.php?action=class.php' class='form_mdp' method='POST'>
            <input type='hidden' name='nom_cours' value='$name_class' id='btn'>
            <input type='hidden' name='id_rubrique' value='$id_rubrique' id='btn'>
            <input type='hidden' name='id_cours' value='$id_cours' id='btn'>
            <input type='hidden' name='index_cours' value='$id' id='btn'>
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