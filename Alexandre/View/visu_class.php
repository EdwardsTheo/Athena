<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
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
        <div class="box basic_box box_visu">
        <?php
        
        // Affichage des profils de toute la classe

            while($data = $request->fetch()) {
                $first_name = $data['nom'];
                $second_name = $data['prenom'];
                $date = $data['heure_connexion'];
                
        ?>
                <div class="red_section">
                    <svg class="box-nav_section">
                        <use xlink:href="Public/svg/symbol-defs.svg#icon-user1"></use>
                    </svg>
                    <h3 class="heading_red"><?php echo $first_name.' '. $second_name?></h3>
                    <div class="activity">
                        <p class="text_activity">Dernière activité: <?php echo $date;?></p>
                    </div>    
                    <form action="#" class="form_mdp">
                        <input type="submit" class="btn_index btn_add_exo btn_visu" value="Cours" id="btn">
                        <input type="submit" class="btn_index btn_add_exo btn_visu" value="Exercices" id="btn">
                        <input type="submit" class="btn_index btn_add_exo btn_visu" value="Profil" id="btn">
                    </form>
            <?php 
                }
                $request->closeCursor();
                
                // récupère le nombre d'exercice validé

                while($data2 = $request2->fetch()){
                    $valide = $data2;
                }
                $request2->closeCursor();

                // récupère le nombre d'exercice en progression

                while($data3 = $request3->fetch()){
                    $in_progress = $data3;
                }
                $request3->closeCursor();

                // récupère le nombre d'exercice rendu

                while($data4 = $request4->fetch()){
                    $returned = $data4;
                }
                $request4->closeCursor();

                // Affichage du pgraphique d'exercice
                require('test_graph.php');
                graphExo($valide,$in_progress,$returned);
            ?>
                </div>
            </div>
        </section>
    <?php require('footer.php'); ?>
    </body>
</html>
