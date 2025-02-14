<?php 
    include("Controller/redirect_exercice_controller.php")
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices</title>
    <link rel="stylesheet" href="Public/styles/home_prof.css">
    <link rel="stylesheet" href="Public/styles/home_student.css">
    <link rel="stylesheet" href="Public/styles/class.css">
    <link rel="stylesheet"  href="Public/styles/exercice.css">
    <link rel="stylesheet"  href="Public/styles/heading.css">
    <link rel="stylesheet"  href="Public/styles/button.css">
    <link rel="stylesheet"  href="Public/styles/font.css">
    <link rel="stylesheet"  href="Public/styles/box.css">
</head>
<body>
<?php 
    require('header.php') ;
    $name_ru = $_POST["rubric_n"];
?>
<!--Affiche le name de l'exercice-->
<section class="class">
    <div class="heading">    
        <p class="heading_primary heading_class" id="name_ex">
            <?php echo $name_ex; 
            $_SESSION['ex'] = $name_ex;
            ?>
        </p>
    </div>
<!--Affiche les ressources et la rubric-->
    <div class="main_class">
        <div class="basic_box box_class index">
            <div class="head_btn">
                <a href="index.php?action=home_exercice.php" class="btn-text_index">&larr; Retour au choix des exercices</a>
            </div>
            <div class="heading_zone heading_zone_ressources">    
                    <p class="heading_zone-rubrik">
                        Ressources necessaires
                    </p>
            </div>
            <div class="form_index">
                <?php 
                if ($result) {
                    $request->closeCursor();
                    $request = getIdResources($id_ex, $id_ru);
                    while($data = $request->fetch()) {
                        $name_res = $data["name_class"];
                        $index_class = $data['index_class'];
                        $id_class = $data['id_class'];
                    ?>
                            <form action="index.php?action=class.php" method="POST">
                                <input type="submit" name="name_class" value="<?php echo $name_res ?>" class="btn_news">
                                <input type="hidden" name="id_class" value="<?php echo $id_class ?>">
                                <input type="hidden" name="index_class" value="<?php echo $index_class ?>">
                                <input type="hidden" name="id_rubrics" value="<?php echo $id_ru ?>">
                                
                            </form>
                
                 <?php
                    }
                }
                else{
                    echo "Aucune ressource n'est attribuée à cet exercice.";
                }
                ?>
            </div>
            <div class="bottom_btn">
                <?php 
                /*––––––––––––––––––––––––––Ajouter des ressources––––––––––––––––––––––––––––––––––––––—*/
                if($_SESSION["status"] == "teacher"){
                    echo '<form action="index.php?action=add_exercice.php" method="POST">';
                        echo '<input type="submit" name="btn" class="btn_news" value="Ajouter ressources" id="btn">';
                        $i = 0;
                        if(is_array($name_res)){
                            while ($name_res[$i]){
                                echo "<input type='hidden' name='resources[]' value='".$name_res[$i]."'>";
                                $i++;
                            }
                        }
                        else{
                            echo "<input type='hidden' name='resources[]' value='".$name_res."'>";
                        }
                            echo '<input type="hidden"  id="btn" name="rubric_n" value="'.$name_ru.'">';
                            echo "<input type='hidden' name='name_ex' value='".$name_ex."'>";
                            echo "<input type='hidden' name='instructions' value='".$instructions."'>";
                            echo "<input type='hidden' name='rub' value='".$id_rubrics."'>";
                            echo "<input type='hidden' name='index' value='".$index_ex."'>";
                        
                    echo '</form>';
                }
                ?>
            </div>
        </div>
        <div class="box_class basic_box zone_class">
            <div class="heading_zone">    
                <p class="heading_zone_class">
                    Consigne de l'exercice
                </p>
            </div>
        
            <div class="text_class">
                <p class="text">
                    <?php echo $instructions ?>
                </p>
            </div>
        <div class="box_btn">
        <?php
            /*–––––––––––––––––––––––Modifier la consigne––––––––––––––––––––––––––––*/
            if($_SESSION["status"] == "teacher"){

                    echo '<form action="index.php?action=add_exercice.php" method="POST">';
                    echo '<input type="submit" name="btn" class="btn_news btn_text btn_prof" value="Modifier consigne" id="btn">';
                    $i = 0;
                    if(is_array($name_res)){
                        while ($name_res[$i]){
                            echo "<input type='hidden' name='resources[]' value='".$name_res[$i]."'>";
                            $i++;
                        }
                    }
                    else{
                        echo "<input type='hidden' name='resources[]' value='".$name_res."'>";
                    }
                        echo "<input type='hidden' name='rubric_n' value=''$name_ru''>
                         <input type='hidden' name='name_ex' value='$name_ex'>
                         <input type='hidden' name='instructions' value='$instructions'>
                         <input type='hidden' name='rub' value='$id_rubrics'>
                         <input type='hidden' name='index' value='$index_ex'>
                 </form>";
            }
        ?>
            
            <?php
            /*––––––––––––––––––––––––Supprimer un exercice––––––––––––––––––––––––––*/
            if($_SESSION["status"] == "teacher"){
                echo '<form action="index.php?action=exercice.php" method="POST">';

                    echo "<input type='hidden' name='id_ex' value='".$id_ex."'>";
                    
                    echo '<input type="submit" name="btn" class="btn_news btn_text btn_prof" value="Supprimer exercice" id="btn">';
                echo '</form>';
            }
            ?>
        </div>
    </div>
</section>


<section class='bottom_exercice'>
<?php if($_SESSION["status"] == "student"){
echo " <div class='drop'>
        <div class='box_drop'>
            <div class='heading_zone'>
                <div id='contents_new'>
                    Déposer votre exercice ici !
                </div>    
            </div>";
            $request2 = correctExos($id_ex);
            while($data2 = $request2->fetch()){
                $contents = $data2["contents_return"];
            }
            $user = $_SESSION["name"];
            $ex = $name_ex;
            $direct = "Public/upload/exercices/";
            $d = dir("Public/upload/exercices/");
            $test = $user."_".$ex;
            while($entry = $d->read()) { 
                preg_match("($test?)", $entry, $new);
                $data = trim($new[0]);
                if (!empty($data)) {
                    if($entry == $contents){
                        echo '<a href="'.$direct.$entry.'">'.$entry.'</a><br />';
                        $i++; 
                    }
                }
            } 
            $d->close();
            echo "<div class='empty' id='dropzone' >
                <svg class='box_drop_svg'>
                    <use xlink:href='Public/svg/symbol-defs.svg#icon-install'></use>
                </svg>
            </div>
            <!--<script src='Model/script.js'></script>-->
            <script>
                (function() {
                        var dropzone = document.getElementById('dropzone');
                        var displayUploads = function(data){
                            var uploads = document.getElementById('contents_new'),
                                anchor,
                                x;
                            for (let x = 0; x < data.length; x++) {
                                anchor = document.createElement('a');
                                anchor.href = data[x].file;
                                anchor.innerText = data[x].name;
                                uploads.appendChild(anchor);
                            }
                        }
                        var upload = function(files){
                            var formData = new FormData(),
                                xhr = new XMLHttpRequest(),
                                x;
                            for (let x=0; x<files.length; x++) {
                                formData.append('file[]',files[x]);
                            }
                            
                            xhr.onload = function(){
                                var data= JSON.parse(this.responseText);
                                console.log(data);
                                displayUploads(data);
                            }
                            xhr.open('POST', 'Controller/upload.php');
                            xhr.send(formData);
                            
                        }
                        // Loop through empty boxes and add listeners
                        dropzone.ondrop = function(e) {
                                            e.preventDefault();
                                            this.className = 'empty';
                                            var data = event.dataTransfer.getData('Files');
                                            console.log(e);
                                            upload(e.dataTransfer.files);

                                        };
                                        
                        dropzone.ondragover = function(e) {
                                            e.preventDefault();
                                            this.className = 'empty hovered';
                                            return false;
                                        };

                        dropzone.ondragleave = function() {
                                            this.className = 'empty';
                                            return false;
                                        };

                        
                    }());
            </script>
        </div>
    </div>";
    }
    ?>
    <div class="bottom_button">
        <div class="form_bottom">
            <?php 
            /*––––––––––––––––––––––––Corriger un exercice––––––––––––––––––––––––––*/
                if($_SESSION["status"] == "teacher"){
                    $id_student = $_POST['id_student'];
                    echo "<form action='index.php?action=correct_exercice.php' method='POST'>
                    <input type='hidden' name='name_ex' value='$name_ex'>
                    <input type='hidden' name='id_student' value='$id_student'>
                    <input type='hidden' name='instructions' value='$instructions'>
                    <input type='hidden'  id='btn' name='id_ex' value='$id_ex'><br/>
                    <input type='submit' name='btn' class='btn btn--green btn_bottom1' value='Correction' id='btn'>
                    </form>";
                }
            ?>
            <!--–––––––––––––––––––––Valider un exercice–––––––––––––––––––––––––––-->
           <?php if($_SESSION["status"] == "student"){
            echo "<form action='index.php?action=home_exercice.php' method='POST'>
                <input type='submit'  name='btn' class='btn btn--green btn_bottom2' value='Valider exercice' id='btn'>
                <input type='hidden'  id='btn' name='id_rub' value='$id_ru'><br/>
                <input type='hidden'  id='btn' name='rubric_n' value='$name_ru'><br/>
                <input type='hidden'  id='btn' name='exercice' value='$id_ex'><br/>
                <input type='hidden'  id='btn' name='index' value='$index_ex'><br/>
                
            </form>";
            }
            ?>
            <?php
            /*––––––––––––––––––––––––––Exercice suivant––––––––––––––––––––––––––––*/
            if($type_btn == "submit" || $type_btn == "submit2"){
                echo "<form action='index.php?action=exercice.php' method='POST'>
                    
                    <input type='submit' name='btn' class='btn btn--green btn_bottom3' value='Exercice suivant &rarr;' id='btn'>
                    <input type='hidden'  id='btn' name='rubric_n' value='$name_ru'><br/>
                    <input type='hidden'  id='btn' name='exercice' value='$id'><br/>
                    <input type='hidden'  id='btn' name='id_rub' value='$id_ru'><br/>
                    <input type='hidden'  id='btn' name='index' value='$index_ex'><br/>
                </form>";
            }
            ?>
        </div>
    </div>
</section>

<?php require('footer.php') ?>
</body>
</html>