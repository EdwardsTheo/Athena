<?php 
$end = ending($_POST['id_eval']);
if($end == true) {
    modifProgress('finish', $data['id_evaluation']);
    $data['status'] = 'finish';
    header("Location: index.php?action=home_evaluation.php");
    exit(); 
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Evaluation</title>
        <link rel="stylesheet" href="Public/styles/home_prof.css">
        <link rel="stylesheet" href="Public/styles/home_student.css">
        <link rel="stylesheet" href="Public/styles/add_evaluation.css"/>
        <link rel="stylesheet" href="Public/styles/add_exercice.css">
        <link rel="stylesheet" href="Public/styles/add_class.css"> 
        <link rel="stylesheet" href="Public/styles/class.css"> 
        <link rel="stylesheet" href="Public/styles/exercice.css">
        <link rel="stylesheet" href="Public/styles/header.css">
        <link rel="stylesheet" href="Public/styles/heading.css">
        <link rel="stylesheet" href="Public/styles/button.css">
        <link rel="stylesheet" href="Public/styles/font.css">
        
    </head>
    <body>
    <?php require("header.php"); ?>
    <div class="heading">    
            <p class="heading_primary heading_class">
                Evaluation de <?php echo htmlspecialchars($_POST['name']); ?>
            </p>
        </div>
            
        <section class="main_add_exo main_add_class">
            <div class="box_ressource ressource_add">
                <div class="choose_chapter">
                    <div class="heading_zone">    
                        <p class="heading_zone_class heading_ressource">
                        Exercices de l'évaluation
                        </p>
                    </div>
                    <?php
                    ?>
                    <?php
                    while($data = $request->fetch()) {
                        ?>
                        <form action="index.php?action=evaluation.php" method="POST" class="form_index">
                            <input type="submit" class="btn_index btn_add_exo" name="showExo" value="<?php echo $data['nom_exo_eval']; ?>" id="btn">
                            <input type="hidden" class="btn_index btn_add_exo" name="id_exo" value="<?php echo $data['id_exo_eval']; ?>" id="btn">
                            <input type="hidden" class="btn_index btn_add_exo" name="status" value="<?php echo $_POST['status']; ?>" id="btn">
                            <input type="hidden" class="btn_index btn_add_exo" name="id_eval" value="<?php echo $_POST['id_eval']; ?>" id="btn">
                            <?php hiddenEval(); ?>
                        </form>
                        <?php
                    }
                    $request->closeCursor();
                       
                    ?>
                    </div> 
                </div>
            </div>
            <?php
            if(isset($_POST['showExo'])) {
                while($data = $request_exo->fetch()) {
                    $consigne = $data['contenu_exo_eval'];
                    $titre = $data['nom_exo_eval'];
                }
                $input = "<input type='submit' class='btn btn--green btn_bottom2' name='modifExoEval' value='Modifier cet exercice' id='btn'>";
            }
            else {
                $consigne = "Consigne de l'exercice";
                $titre = "Choisir un exercice";
                $input = "<input type='submit' class='btn btn--green btn_bottom2' name='addExoEval' value='Ajouter un exercice' id='btn'>";
            }
            $_SESSION['ex'] = $titre;
            ?>
                <div class="box_ressource order box_eval">
                    <div class="heading_zone">
                        <div class="input_text"> 
                            <p class="heading_zone_class heading_ressource">Exercice : <?php echo $titre; ?></p>
                        </div>
                    </div>
                        <div class="text_area_consigne text_eval">
                           <p class="contenu_new"><?php echo $consigne; ?></p>
                        </div>
                    </div>
                </div>
            </section>
            
                <?php 
                if(isset($_POST['showExo'])) {
                    ?>
                <section class="bottom_exercice">
                    <div class="drop">
                        <div class="box_drop">
                        <div class="heading_zone">
                            <div id="contenu_new">
                            <p class="heading_zone_class heading_ressource">Déposer votre exercice ici !</p>
                            </div>    
                        </div>
                        <div class="empty" id="dropzone" >
                            <svg class="box_drop_svg">
                                <use class="drop_test" xlink:href="Public/svg/symbol-defs.svg#icon-install"></use>
                            </svg>
                        </div>
                        <script>
                        (function() {
                        var dropzone = document.getElementById('dropzone');
                        var displayUploads = function(data){
                            var uploads = document.getElementById('contenu_new'),
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
                                console.log("file = ",files[0]['name']);
                            for (let x=0; x<files.length; x++) {
                                formData.append('file[]',files[x]);
                            }
                            
                            xhr.onload = function(){
                                var data= JSON.parse(this.responseText);
                                console.log(data);
                                displayUploads(data);
                            }
                            xhr.open('POST', 'Controller/upload_eval.php');
                            xhr.send(formData);
                            
                        }
                        // Loop through empty boxes and add listeners
                        dropzone.ondrop = function(e) {
                                            e.preventDefault();
                                            this.className = 'empty';
                                            var data = event.dataTransfer.getData("Files");
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
                    </div>
                    <div class="bottom_button">
                    <div class="form_bottom">
                <form action="index.php?action=evaluation.php" method="POST">
                    <input type="submit" name="btn" class="btn btn--green btn_bottom2" value="Valider l'exercice" id="btn">
                    <input type="hidden" name="id_ex" value="<?php echo $_POST['id_exo']?>"><br/>
                    <input type="hidden" name="name" value="<?php echo $_POST['name']?> ">
                    <input type="hidden" name="id_eval" value="<?php echo $_POST['id_eval']?> ">
                    
                </form>
                </div>
                
            </div>
                
            <?php } ?>
               
                </section>
                
             
        
    <?php require("footer.php"); ?>
    </body>
</html>