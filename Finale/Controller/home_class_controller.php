<?php
require_once("Model/request.php");

function showClass() {
    $request = getRub();
    $request5 = getStudent();
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
    $nv_name = $_POST['NewClassName'];
    echo $nv_name;
        $req->execute(array(
            'nv_name' => $nv_name
        ));
        $req->closeCursor();
    
}

function showSection($answer) {
    classes($answer);
}

function checkStatus($id_rubrics, $id_class) {
    $request = checkReadrubric($id_rubrics); 
    while($data = $request->fetch()) {
        $status = $data['status_class'];
        $p_id_class = $data['id_class'];
        if($id_class == $p_id_class) {
            if($status == 'lu') return 'icon-check';
            else return 'icon-circle-with-cross';
            break;
        }
    }
}

function checkSVG($svg) {
    if($svg == 'icon-check') return $phrase = 'class lu';
    else return $phrase = 'class non lu';
}

function classes($answer) {
    $i = 0;
    while($data = $answer->fetch()) {
        $name_class = $data['name_class'];
        $id = $data['index_class'];
        $id_class = $data['id_class'];
        $id_rubrics = $data['id_rubrics'];
        if($_SESSION['status'] == 'teacher') {
            $svg = '';
            $phrase ='';
        }
        else {
            $svg = checkStatus($id_rubrics, $id_class);
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
            <input type='hidden' name='name_class' value='$name_class' id='btn'>
            <input type='hidden' name='id_rubrics' value='$id_rubrics' id='btn'>
            <input type='hidden' name='id_class' value='$id_class' id='btn'>
            <input type='hidden' name='index_class' value='$id' id='btn'>
            <input type='submit' class='btn btn--green btn_section' name='Afficher' value='Lire cours' id='btn'>
        </form>";
        if($_SESSION['status'] == 'teacher') {
            ?>
            <div class="home_class_prof">
              <form action='index.php?action=home_class.php' class='form_prof' method='POST'>
                <input type='submit' class='btn_news' name='SuppClass' value='Supprimer cours' id='btn'>
                <?php HiddenClassButton($name_class, $id_rubrics, $id_class, $id); ?>
             </form>
             <form action='index.php?action=home_class.php' class='form_prof' method='POST'>
                <input type='text' class='form_input form_text' placeholder='Nouveau nom de cours' id='name' name='NewClassName' required>
                <input type='submit' class='btn_news' name='ModifNameClass' value='Modifier nom de cours' id='btn'>
                <?php HiddenClassButton($name_class, $id_rubrics, $id_class, $id); ?>
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



function HiddenClassButton($name_class, $id_rubrics, $id_class, $id) {
    ?>
    <input type='hidden' name='name_class' value="<?php echo $name_class; ?>"" id='btn'>
    <input type='hidden' name='id_rubrics' value="<?php echo $id_rubrics; ?>"" id='btn'>
    <input type='hidden' name='id_class' value="<?php echo $id_class; ?>"" id='btn'>
    <input type='hidden' name='index_class' value="<?php echo $id; ?>"" id='btn'>
    <?php
}



?>