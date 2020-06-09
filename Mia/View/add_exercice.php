<?php
    require_once("Model/request.php");
    if ($_POST["btn"] == "Modifier consigne" || $_POST["btn"] == "Ajouter ressources") {
        $btn = $_POST["btn"];
        $name_ex = $_POST["name_ex"];
        $resources = $_POST["resources"];
        $instructions = $_POST["instructions"];
        $rubrique = $_POST["rubrique_n"];
        $index = $_POST["index"];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Public/styles/add_exercice.css">
        <link rel="stylesheet" href="Public/styles/home_student.css">
        <link rel="stylesheet" href="Public/styles/exercice.css">
        <link rel="stylesheet" href="Public/styles/button.css">
        <link rel="stylesheet" href="Public/styles/font.css">
        <link rel="stylesheet" href="Public/styles/class.css">
           
        <title>Page d'ajout d'exercice</title>
    </head>
    
    <body>
    <?php require("header.php"); ?>
    <?php 
        if (isset($_GET["error"])) {
            $error = $_GET["error"];
            switch ($error) {
                case "1" : echo "<p class=error>Veuillez ne pas trafiquer le formulaire s'il vous plait</p>";
                break;
                case "2" : echo "<p class=error>Veuillez associer un chapitre a cet exercice s'il vous plait</p>";
                break;
                case "3" : echo "<p class=error>Veuillez mettre au moins une ressource s'il vous plait</p>";
                break;
                case "4" : echo "<p class=error>Veuillez donner un nom a cet exercice s'il vous plait</p>";
                break;
                case "5" : echo "<p class=error>Veuillez donner une consigne a cet exercice s'il vous plait</p>";
                break;
                //case "6" : echo "<p class=error>Veuillez mettre un output de référence s'il vous plait</p>";
                //break;
                case "7" : echo "<p class=error>Ce nom d'exercice existe déjà dans la base de données</p>";
                break;
                
            }
        }
    ?>
    <div class="heading">    
        <p class="heading_primary heading_class">
            Ajouter un exercice
        </p>
    </div>
    <!-- –––––––––––––––––––––––––Choix de la rubrique––––––––––––––––––––––––– -->
    <section class="main_add_exo">
       <div class="box_ressource ressource_add">
            <div class="choose_chapter">
                <div class="heading_zone">    
                    <p class="heading_zone_class heading_ressource">
                    Lier des ressources de cours à l'exercice. <br/>
                    <br/>
                    Choisir une rubrique 
                    </p>
                </div>
               <form action="index.php?action=add_exercice.php" class="form_index" method="POST">
                    <?php 
                        
                        $request= getRub(); 
                        while($data = $request->fetch()) {
                            $name_ru = $data['nom_rubrique'];
                            $id = $data['id_rubrique'];
                            $svg = $data['svg'];
                    ?>
                    <input type="submit" name="rubrique" class="btn_index btn_add_exo" value="<?echo $name_ru?>" id="btn"> 

                    <?php            
                        }
                        $request->closeCursor();
                    ?>   
                </form>




            <!-- –––––––––––––––––––––––––Choix des cours––––––––––––––––––––––––– -->
            </div>
            <div class="choose_class">
                <div class="heading_zone">    
                    <p class="heading_zone_class heading_ressource">
                    Choisir au moins un cours 
                    </p>
                </div>
                <form action="index.php?action=add_exercice.php" class="form_index check_box" method="POST">
                    <?php 
                        if ($btn == "Modifier consigne" || $btn == "Ajouter ressources"){
                            $_POST["rubrique"] = $rubrique;
                        };
                        if (isset($_POST["rubrique"])){
                            $request = getRub();
                            while($data = $request->fetch()) {
                                $id = $data['id_rubrique'];
                                $name_ru = $data['nom_rubrique'];
                                if ($_POST["rubrique"] == $name_ru) {
                                    echo '<input type="hidden" name="rubrique" value="'.$id.'">';
                                    $_POST['rubrique']=$id;
                                } 
                            }
                            $request->closeCursor();
                        }
                        
                        $request = getClass();
                        $i=0;
                        while($data = $request->fetch()) {
                            $name_cl = $data['nom_cours'];
                            $index = $data['index_cours'];
                            if ($btn == "Modifier consigne" || $btn == "Ajouter ressources"){
                                if ($resources != "Aucune ressource n'est attribuée"){
                                    if(is_array($resources)){
                                        if ($name_cl == $resources[$i]){
                                            $i++;
                                            $check = "checked";
                                        }
                                        else{
                                            $check = "";
                                        }
                                    }
                                    else {
                                        if ($name_cl == $resources){
                                            $check = "checked";
                                        }
                                        else{
                                            $check = "";
                                        }
                                    }
                                }
                            } 
                                        
                    ?>
                    <div class="check">
                        <input type="checkbox" name="resources[]" value="<? echo $index ?>" class="btn_check" id="btn" <? echo $check?> ><label for="html" class="label_class"><? echo $name_cl?> </label>
                    </div>
                    <?php           
                                        
                        }
                        $request->closeCursor();
                    ?> 
            </div>
        </div>
<!-- –––––––––––––––––––––––––––––––––––––––––––––Consigne––––––––––––––––––––––––––––––––––––––––––––––– -->
        <div class="box_text">
            <div class="box_ressource order">
                <p class="heading_zone_class heading_ressource"> Nom de l'exercice :</p>
                <?php  
                    if($btn == "Modifier consigne" || $btn == "Ajouter ressources"){
                        $value_ex = 'value="'.$name_ex.'"';
                        $consigne = $instructions;
                        echo '<input type="hidden" name="button" value="modif">';
                        echo '<input type="hidden" name="old_name" value="'.$name_ex.'">';
                    }
                    else {
                        $value_ex = "";
                        $consigne = "Consigne de l'exercice";
                    }
                ?>
                <input type="text" name="name" class="text_name" <? echo $value_ex ?> >
                <div class="heading_zone">  
                    <p class="heading_zone_class heading_ressource">
                    Consigne de l'exercice
                    </p>
                </div>
                <div class="text_area_consigne">
                    <textarea name="instruction" class="text_consigne" id="text_area" ><?echo $consigne?></textarea>
                </div>
            </div>
            <div class="validation box_add">
                <div class="box_drop">
                    <div class="heading_zone">
                        <p class="contenu_new">
                            Déposer l'output attendu ici !
                        </p>    
                    </div>
                    <svg class="box_drop_svg svg_drop">
                        <use xlink:href="Public/svg/symbol-defs.svg#icon-install"></use>
                    </svg>
                </div>
                    <input type='hidden' name='index' value='<? echo $index?>'>
                    <input type="submit" name="btn" class="btn btn--green btn_bottom2" value="Ajouter Exercice" id="btn">
                </form>
            </div>
        </div>

    </section>

    <section class=bottom_add_exo>
    </section>
        
    <?php require("footer.php"); ?>
    </body>
</html>