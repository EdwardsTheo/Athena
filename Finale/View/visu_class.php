<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Public/styles/font.css">
        <link rel="stylesheet" href="Public/styles/button.css">
        <link rel="stylesheet" href="Public/styles/box.css">
        <link rel="stylesheet" href="Public/styles/visu_class.css">
        <link rel="stylesheet" href="Public/styles/heading.css">
        <title>Visu Class</title>
    </head>

    <body>
        <?php require('header.php') ?>

        <div class="heading">
            <p class="heading_primary">Votre Classe</p>
        </div>
        <section class="visu">
            <?php return_to_line(); ?>
            <div class="box basic_box box_visu">
                <?php
        
                    // Affichage des profils de toute la classe
                    $i = 2;
                    while($data = $request->fetch()) {
                        $first_name = $data['name'];
                        $second_name = $data['firstname'];
                        $date = $data['heure_connexion'];
                        $id_student = $data['id_user'];
                ?>
                    <div class="red_section">
                        <svg class="box-nav_section">
                            <use xlink:href="Public/svg/symbol-defs.svg#icon-user1"></use>
                        </svg>
                        <h3 class="heading_red"><?php echo $first_name.' '. $second_name ?></h3>
                        <div class="activity">
                            <p class="text_activity">Dernière activité:<?php echo $date ?></p>
                        </div>
                        <div class="form_mdp">
                            <form action="index.php?action=home_class.php"  method="POST">
                                <input type="submit" class="btn_index btn_add_exo btn_visu" value="class" id="btn">
                                <input type='hidden' name='Profil' value=<?php echo $second_name.$first_name; ?>>
                                <input type='hidden' name='id_student' value=<?php echo $id_student; ?>>
                            </form>
                            <form action="index.php?action=home_exercice.php"  method="POST">
                                <input type="submit" class="btn_index btn_add_exo btn_visu" value="Exercices" id="btn">
                                <input type='hidden' name='Profil' value=<?php echo $second_name.$first_name; ?>>
                                <input type='hidden' name='id_student' value=<?php echo $id_student; ?>>
                            </form>
                            <form action="index.php?action=home_student.php"  method="POST">
                                <input type="submit" class="btn_index btn_add_exo btn_visu" value="Profil" id="btn">
                                <input type='hidden' name='Profil' value=<?php echo $second_name.$first_name; ?>>
                                <input type='hidden' name='id_student' value=<?php echo $id_student; ?>>
                            </form>
                        </div>
                    </div>
                    <?php 
                        $i++;
                    }
                        $request->closeCursor();
                    ?>
                </div>
            </div>
        </section>
        <?php /*
        <form method="post" action="">
            <input type="submit" name="deleteAll" value="Supprimer la classe" class="btn_mdp btn btn--green">
        </form>
        */?>
        <?php require('footer.php'); ?>  
    </body>
</html>
