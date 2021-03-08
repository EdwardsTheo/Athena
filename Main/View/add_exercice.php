<?php
    require_once("Model/request.php");
    if(isset($_POST["btn"]) || isset($_POST["rubric"])){
        if ($_POST["btn"] == "Modifier consigne" || $_POST["btn"] == "Ajouter ressources") {
            $btn = $_POST["btn"];
            $name_ex = $_POST["name_ex"];
            $resources = $_POST["resources"];
            $instructions = $_POST["instructions"];
            $rubric = $_POST["rubric_n"];
            $index = $_POST["index"];
        }
        elseif(isset($_POST["rubric"])){
            $name_ex = $_POST["name_ex"];
            $resources = $_POST["resources"];
            $instructions = $_POST["instructions"];
            $rubric = $_POST["rubric"];
            $index = $_POST["index"];
        }
    }
    else{
        $btn = "";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Public/styles/add_exercice.css">
        <link rel="stylesheet" href="Public/styles/home_student.css">
        <link rel="stylesheet" href="Public/styles/heading.css">
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
                case "1" : echo "<p class=error>Veuillez rentrez les bonnes informations</p>";
                break;
                case "2" : echo "<p class=error>Veuillez associer un chapter a cet exercice</p>";
                break;
                case "3" : echo "<p class=error>Veuillez mettre au moins une ressource</p>";
                break;
                case "4" : echo "<p class=error>Veuillez donner un name a cet exercice</p>";
                break;
                case "5" : echo "<p class=error>Veuillez donner une consigne a cet exercice</p>";
                break;
                //case "6" : echo "<p class=error>Veuillez mettre un output de référence</p>";
                //break;
                case "7" : echo "<p class=error>Ce name d'exercice existe déjà dans la base de données</p>";
                break;
                
            }
        }
    ?>
    <div class="heading">    
        <p class="heading_primary heading_class">
            Ajouter un exercice
        </p>
    </div>
    <!-- –––––––––––––––––––––––––Choix de la rubric––––––––––––––––––––––––– -->
    <section class="main_add_exo">
       <div class="box_ressource ressource_add">
            <div class="choose_chapter">
                <div class="heading_zone">    
                    <p class="heading_zone_class heading_ressource">
                        Lier des ressources de cours à l'exercice.
                        <br/>
                        <br/>
                        Choisir une rubric 
                    </p>
                </div>
               
                    <?php 
                        
                        $request= getRub(); 
                        while($data = $request->fetch()) {
                            $name_ru = $data['name_rubric'];
                            $id = $data['id_rubrics'];
                            $svg = $data['svg'];
                            echo "<form action='index.php?action=add_exercice.php' class='form_index' method='POST'>";
                            echo "<input type='hidden' name='name_ex' value='".$name_ex."'>";
                            echo "<input type='hidden' name='instructions' value='".$instructions."'>";
                            echo "<input type='hidden' name='index' value='".$index."'>";
                    
                            echo "<input type='submit' name='rubric' class='btn_index btn_add_exo' value='$name_ru' id='btn'>";
                            echo "</form>";
                        }
                        $request->closeCursor();  
               
                ?>




            <!-- –––––––––––––––––––––––––Choix des class––––––––––––––––––––––––– -->
            </div>
            <div class="choose_class">
                <div class="heading_zone">    
                    <p class="heading_zone_class heading_ressource">
                    Choisir au moins un class 
                    </p>
                </div>
                <form action="index.php?action=add_exercice.php" class="form_index check_box" method="POST">
                    <?php 
                        if ($btn == "Modifier consigne" || $btn == "Ajouter ressources"){
                            $_POST["rubric"] = $rubric;
                        };
                        if (isset($_POST["rubric"])){
                            $request = getRub();
                            while($data = $request->fetch()) {
                                $id = $data['id_rubrics'];
                                $name_ru = $data['name_rubric'];
                                if ($_POST["rubric"] == $name_ru) {
                                    echo '<input type="hidden" name="rubric" value="'.$id.'">';
                                    $_POST['rubric']=$id;
                                } 
                            }
                            $request->closeCursor();
                        }
                        
                        $request = getClass();
                        $i=0;
                        while($data = $request->fetch()) {
                            $name_cl = $data['name_class'];
                            $index_class = $data['index_class'];
                            if ($btn == "Modifier consigne" || $btn == "Ajouter ressources"){
                                if ($resources != "Aucune ressource n'est attribuée à cet exercice"){
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
                        <input type="checkbox" name="resources[]" value="<?php echo $index_class ?>" class="btn_check" id="btn" <?php echo $check?> ><label for="html" class="label_class"><?php echo $name_cl?> </label>
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
                <p class="heading_zone_class heading_ressource"> name de l'exercice :</p>
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
                <input type="text" name="name" class="text_name" <?php echo $value_ex ?> >
                <div class="heading_zone">  
                    <p class="heading_zone_class heading_ressource">
                    Consigne de l'exercice
                    </p>
                </div>
                <div class="text_area_consigne">
                    <textarea name="instruction" class="text_consigne" id="text_area" ><?echo $consigne?></textarea>
                </div>
            </div>
        </div>
    </section>
    <section class=bottom_add_exo>
        <div class="validation box_add">
                        <?php 
                        if(isset($index) && !empty($index)){
                            echo "<input type='hidden' name='index' value='$index'>";
                        }
                        ?>
                <input type="submit" name="btn" class="btn btn--green btn_bottom2" value="Ajouter Exercice" id="btn">
            </form>
        </div>
     </section>
        

   

   
    
        
    <?php require("footer.php"); ?>
    </body>
</html>