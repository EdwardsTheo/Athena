<?php


function showClass() {
    $request = getRub();
    require('View/home_class.php');
}


function suppClass() {
    deleteProgressClass();
    deleteChapterClass();
    $request_final = reqSuppClass();
}

function deleteProgressClass() {
    $request = reqDeleteProgressClass();
}

function deleteChapterClass() {
    $request = reqDeleteChapterClass();
}

function changeNameChap() {
    $req = reqChangeNameChap();
    $nv_nom = $_POST['NewClassName'];
    echo $nv_nom;
        $req->execute(array(
            'nv_nom' => $nv_nom
        ));
        $req->closeCursor();
    
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
            break;
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
        if($_SESSION['status'] == 'professeur') {
            $svg = '';
            $phrase ='';
        }
        else {
            $svg = checkStatus($id_rubrique, $id_cours);
            $phrase = checkSVG($svg); 
        }
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
        </form>";
        if($_SESSION['status'] == 'professeur') {
            ?>
            <div class="home_class_prof">
              <form action='index.php?action=home_class.php' class='form_prof' method='POST'>
                <input type='submit' class='btn_news' name='SuppClass' value='Supprimer cours' id='btn'>
                <?php HiddenClassButton($name_class, $id_rubrique, $id_cours, $id); ?>
             </form>
             <form action='index.php?action=home_class.php' class='form_prof' method='POST'>
                <input type='text' class='form_input' placeholder='Nouveau nom de cours' id='name' name='NewClassName' required>
                <input type='submit' class='btn_news' name='ModifNameClass' value='Modifier nom cours' id='btn'>
                <?php HiddenClassButton($name_class, $id_rubrique, $id_cours, $id); ?>
            </form>
            </div>
            <?php
        }
    echo "</div>";
    $i++;
    }
    $answer->closeCursor();
    echo "</div></section>";
    require('View/footer.php');
}



function HiddenClassButton($name_class, $id_rubrique, $id_cours, $id) {
    ?>
    <input type='hidden' name='nom_cours' value="<?php echo $name_class; ?>"" id='btn'>
    <input type='hidden' name='id_rubrique' value="<?php echo $id_rubrique; ?>"" id='btn'>
    <input type='hidden' name='id_cours' value="<?php echo $id_cours; ?>"" id='btn'>
    <input type='hidden' name='index_cours' value="<?php echo $id; ?>"" id='btn'>
    <?php
}



?>