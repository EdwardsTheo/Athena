<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Public/styles/add_exercice.css">
        <link rel="stylesheet" href="Public/styles/add_class.css">
        <link rel="stylesheet" href="Public/styles/home_student.css">
        <link rel="stylesheet" href="Public/styles/heading.css">
        <link rel="stylesheet" href="Public/styles/exercice.css">
        <link rel="stylesheet" href="Public/styles/button.css">
        <link rel="stylesheet" href="Public/styles/font.css">
        <link rel="stylesheet" href="Public/styles/class.css">
        <title>Page d'ajout de cours</title>
    </head>
    <body>
    <?php require("header.php"); ?>

        <div class="heading">    
            <p class="heading_primary heading_class">
                Ajouter un class
            </p>
        </div>
        
        <section class="main_add_exo main_add_class">
            <div class="box_ressource ressource_add box_add">
                <div class="choose_chapter">
                    <div class="heading_zone">    
                        <p class="heading_zone_class heading_ressource">
                        Choix de la rubric
                        </p>
                    </div>
                    <?php
                    while($data = $request->fetch()) {
                        $name_ru = $data['rubric'];
                        $id = $data['id_rubrics'];
                    ?>
                    <form action="index.php?action=add_class.php" class="form_index" method="POST">
                        <input type="submit" class="btn_index btn_add_exo form_add_class" name="rubric" value="<?php echo $name_ru ?>" id="btn">
                        <input type="hidden" class="btn_index btn_add_exo form_add_class" name="rubric" value="<?php echo $id ?>" id="btn">
                    </form>
                    <?php            
                    }
                    $request->closeCursor();
                    ?>
                </div>   
                <div class="choose_class">
                    <div class="heading_zone">    
                        <p class="heading_zone_class heading_ressource">
                        Choisir le cours
                        </p>
                    </div>
                    
                    <?php
                    if(isset($_POST['rubric'])) {
                        while($data = $request_class->fetch()) {
                        $name_class = $data['name_class'];
                        $id = $data['index_class'];
                        $id_class = $data['id_class'];
                        $id_rubrics = $data['id_rubrics'];   
                    ?>
                    <form action="index.php?action=add_class.php" class="form_index" method="POST">
                        <input type="submit" class="btn_index btn_add_exo" name="name_class" value="<?php echo $name_class; ?>" id="btn">
                        <input type="hidden" class="btn_index btn_add_exo form_add_class" name="id_rubrics" value="<?php echo $_POST['rubric']; ?>" id="btn">
                        <input type="hidden" class="btn_index btn_add_exo form_add_class" name="name_rubric_add" value="<?php echo $_POST['rubric']; ?>" id="btn">
                        <input type="hidden" class="btn_index btn_add_exo form_add_class" name="index_class" value="<?php echo $id; ?>" id="btn">
                    </form>
                    <?php
                        }
                        $request_class->closeCursor();
                    
                    ?>
                    <form action="index.php?action=add_class.php" class="form_add" method="POST">
                        <div class="input_text">
                            <input type="text" class="form_input form_text form_add_text" name="new_name_class" placeholder="Nouveau class" id="mdp">
                        </div>
                        <div class="add">
                            <input type="submit" class="btn_news btn_text btn_prof" name="Add_new_class" value="Ajouter un class" id="btn">
                            <input type="hidden" class="btn_index btn_add_exo form_add_class" name="rubric" value="<?php echo $_POST['rubric']; ?>" id="btn">
                        </div>
                    </form>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <?php
            if(isset($_POST['name_rubric_add'])) {
            ?>
            <div class="box_text">
                <p class="heading_zone_class heading_ressource heading_add">
                Le chapter sera ajouté à la rubric: <?php echo $_POST['name_rubric_add']; ?>
                </p>
                <p class="heading_zone_class heading_ressource heading_add">
                Le chapter sera ajouté au cours: <?php echo $_POST['name_class']; ?>
                </p>
                <div class="box_ressource order">
                    <div class="heading_zone">    
                        <div class="input_text">
                        <form action="index.php?action=add_class.php" class="form_bottom" method="POST">
                            <input type="text" class="form_input" name="chapter_title" placeholder="Titre du chapter" id="mdp" required>
                        </div>
                    </div>
                    <div class="text_area_consigne">
                        <textarea class="text_consigne" name="url_chapter" id="text_area" required>url du chapter</textarea>
                    </div>
                </div>
                <div class="validation">
                        <input type="submit" class="btn btn--green btn_bottom2" name="add_class_final" value="Ajouter class" id="btn">
                        <input type="hidden" class="btn_index btn_add_exo form_add_class" name="id_rubrics" value="<?php echo $_POST['id_rubrics']; ?>" id="btn">
                        <input type="hidden" class="btn_index btn_add_exo form_add_class" name="name_class" value="<?php echo $_POST['name_class']; ?>" id="btn">
                        <input type="hidden" class="btn_index btn_add_exo form_add_class" name="index_class" value="<?php echo $_POST['index_class']; ?>" id="btn">
                    </form>
                </div>
            </div>
            <?php
            }
            ?>
        </section>

    <?php require("footer.php"); ?>
    </body>
</html>