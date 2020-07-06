<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Public/styles/heading.css">
        <link rel="stylesheet" href="Public/styles/box.css">
        <link rel="stylesheet" href="Public/styles/font.css">
        <link rel="stylesheet" href="Public/styles/button.css">
        <link rel="stylesheet" href="Public/styles/class.css">
        <title>Page de cours</title>
    </head>

    <body>
    <?php
    require("header.php"); ?>

        <section class="class">
            <div class="heading">    
                <p class="heading_primary heading_class">
                    <?php 
                    while($data = $request1->fetch()) {
                        $name_cours1 = $data['nom_cours'];
                    }
                    $request1->closeCursor();
                    if(isset($name_cours1)) {
                        $_POST['nom_cours'] = $name_cours1; 
                    }
                    else echo $_POST['nom_cours'];
                    ?>
                </p>
            </div>
            <div class="main_class">
                <div class="basic_box box_class index">
                    <div class="head_btn">
                        <a href="index.php?action=home_class.php" class="btn-text_index">&larr; Retour au choix du cours</a>
                    </div>
                   
                        <?php
                        $i = 0;
                        while($data = $request->fetch()) {
                            //Affiche tous les boutons pour selectionner un chapitre
                            $name_chap = $data['nom_chapitre'];
                            $id_chap = $data['id_chapitre'];
                            $i++;
                        ?>
                        <form action="index.php?action=class.php" class="form_index" method="POST">
                        <input type="submit" class="btn_index btn_class" name="Afficher_chap" value="<?php echo $name_chap ?>" id="btn">
                        <?php        
                        }
                        $request->closeCursor();
                        hiddenBtn(); ?>
                    </form>
                </div>
                <div class="basic_box box_class zone_class">
                    <div class="heading_zone">    
                        <p class="heading_zone_class">
                        <?php echo $_POST['Afficher_chap'];
                        ?>
                        </p>
                        <?php
                        if($_SESSION['status'] == "professeur") {
                            //Si c'est un professeur on affiche un bouton propre à lui
                        ?>  
                            <form class="modif_chap" method="POST">
                                <div class="form_group">
                                    <input type="text" class="form_input" placeholder="Nouveau nom de chapitre" id="name" name="chap" required>
                                </div>
                                <div class="bottom_btn">
                                    <input type="submit" class="btn_news" name="Modifier_chap" value="Modifier chapitre" id="btn">
                                    <input type="hidden" name="nom_chapitre" value="<?php echo $_POST['Afficher_chap'];?>" id="btn">
                                    <?php 
                                    hiddenBtn(); ?>
                                </div>
                                </div>
                            </form>
                        <?php                     
                        }
                        ?>
                    <div class="text_class">
                        <?php
                         while($data = $request2->fetch()) { 
                            $name_chap = $data['nom_chapitre'];
                            if($name_chap == $_POST['Afficher_chap']) {
                                $img = $data['contenu_chapitre'];
                                break;
                            }
                         }
                         if(isset($img)) {
                            echo "<iframe class='iframe' title='Inline Frame Example' src='$img'>";
                         }
                         ?>
                        </iframe>
                    </div>
                    <div class="box_btn">
                        <form action="index.php?action=class.php" class="form_index form_class" method="POST">
                            <?php
                            if($_SESSION['status'] == "professeur") {
                                echo  "<input type='submit' class='btn_news btn_text btn_prof' value='Modifier' id='btn'>";
                                echo  "<input type='submit' class='btn_news btn_text btn_prof' name='Supprimer Chapitre' value='Supprimer chapitre' id='btn'>";
                            }
                            else echo "<input type='submit' class='btn_news btn_text btn_prof btn_mark' name='Read' value='$_POST[status_cours]' id='btn'>";
                            hiddenBtn();
                            ?>

                        </form>
                        <?php
                            $end = nextChapter();
                            if($end == false) {
                            ?>
                                <form action="index.php?action=class.php" class="form_index form_class" method="POST">
                                <input type="submit" class="btn_news btn_text btn_prof" name="Next" value="Cours suivant &rarr;" id="btn">
                                <input type="hidden" name="Afficher_chap" value="<?php echo $_POST['Afficher_chap'];?>" id="btn">
                            <?php
                            }  
                            hiddenBtnNext(); ?>   
                        </form>
                    </div>
                </div>
            </div>
        </section>

    <?php require("footer.php"); ?>
    </body>
</html>