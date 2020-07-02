<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Public/styles/home_prof.css">
        <link rel="stylesheet" href="Public/styles/home_exercice.css">
        <link rel="stylesheet" href="Public/styles/progress_bar.css">
        <link rel="stylesheet" href="Public/styles/box.css">
        <link rel="stylesheet" href="Public/styles/font.css">
        <link rel="stylesheet" href="Public/styles/button.css">
        <link rel="stylesheet" href="Public/styles/heading.css">
        <title>Home Exercice</title>

    </head>
    <body>
        <?php require('header.php') ?>
        
        <section class="choose_sec">
            <div class="heading">
                <p class="heading_primary">
                INDEX DES EXERCICES
                </p>
                <?php if($_SESSION['status'] != 'eleve'){ ?>
                        <form method = "POST" action="">
                            <select name='eleve'>
                            <?php 
                                while($data = $request5->fetch()){
                                    $nom = $data['nom'].' '.$data['prenom'];
                                    $id_eleve = $data['id_user'];
                                    echo '<option value='.$id_eleve.'>'.$nom.'</option>';
                                }
                            ?>
                            </select>
                            <input type="submit" value="validé">
                        </form>
                 <?php } ?>
            </div>
            <div class="box_row">
<?php
while($data = $request->fetch()) {
    $name_ru = $data['nom_rubrique'];
    $svg = $data['svg'];
?>
    <div class="basic_box red_section">
        <svg class="box-nav_section">
         <use xlink:href="Public/svg/symbol-defs.svg#<?php echo $svg?>"></use>
        </svg>
        <h3 class="heading_red">
        <?php 
            echo $name_ru;
            while($data = $request4->fetch()){
                $progress_exo = intval($data[0]);
            }
            while($data2 = $request2->fetch()){
                $countExos = intval($data2[0]);
            }
            $progress = round($progress_exo * 100 / $countExos);
        
        ?>
        </h3>
        <div class="progress-bar progress_exo">
                <?php
                    echo '<span style="width:'.$progress.'%">';
                    echo $progress.'%';
                ?>
            </span>
        </div>
        <form action="#" class="form_mdp">
            <input type="submit" class="btn btn--green btn_section " value="Afficher" id="btn">
        </form>
    </div>
<?php
}
$request->closeCursor();
?>                
            </div>
        </section>

        <section class="choose_exo">
            <div class="heading">
                <p class="heading_primary">
                Exercice
                </p>
            </div>
            <div class="box_row">
                <div class="basic_box red_section red_exo">
                    <svg class="box-nav_exo">
                        <use xlink:href="Public/svg/symbol-defs.svg#icon-html-five"></use>
                    </svg>
                    <h3 class="heading_red heading_exo">
                    home page evolué
                    </h3>
                    <div class="status">
                        <p class="message">
                        Exercice terminé
                        </p>
                        <svg class="box-nav_exo">
                            <use xlink:href="Public/svg/symbol-defs.svg#icon-check"></use>
                        </svg>
                    </div>  
                    <form action="#" class="form_mdp">
                        <input type="submit" class="btn btn--green btn_section " value="Afficher" id="btn">
                    </form>
                </div>
                <div class="basic_box red_section red_exo">
                    <svg class="box-nav_exo">
                        <use xlink:href="Public/svg/symbol-defs.svg#icon-html-five"></use>
                    </svg>
                    <h3 class="heading_red heading_exo">
                    Formulaire d'inscription
                    </h3>
                    <div class="status">
                        <p class="message">
                        Exercice terminé
                        </p>
                        <svg class="box-nav_exo">
                            <use xlink:href="Public/svg/symbol-defs.svg#icon-check"></use>
                        </svg>
                    </div>  
                    <form action="#" class="form_mdp">
                        <input type="submit" class="btn btn--green btn_section " value="Afficher" id="btn">
                    </form>
                </div>
                <div class="basic_box red_section red_exo">
                    <svg class="box-nav_exo">
                        <use xlink:href="Public/svg/symbol-defs.svg#icon-html-five"></use>
                    </svg>
                    <h3 class="heading_red heading_exo">
                    Navigation animale
                    </h3>
                    <div class="status">
                        <p class="message">
                        Continuez l'exercice 
                        </p>
                        <svg class="box-nav_exo">
                            <use xlink:href="Public/svg/symbol-defs.svg#icon-circle-with-cross"></use>
                        </svg>
                    </div>  
                    <form action="#" class="form_mdp">
                        <input type="submit" class="btn btn--green btn_section " value="Afficher" id="btn">
                    </form>
                </div>
                <div class="basic_box red_section red_exo">
                    <svg class="box-nav_exo">
                        <use xlink:href="Public/svg/symbol-defs.svg#icon-html-five"></use>
                    </svg>
                    <h3 class="heading_red heading_exo">
                    Poème
                    </h3>
                    <div class="status">
                        <p class="message">
                        Commencez l'exercice !
                        </p>
                        <svg class="box-nav_exo">
                            <use xlink:href="Public/svg/symbol-defs.svg#icon-circle-with-cross"></use>
                        </svg>
                    </div>  
                    <form action="#" class="form_mdp">
                        <input type="submit" class="btn btn--green btn_section " value="Afficher" id="btn">
                    </form>
                </div>
            </div>
        </section>


        <?php require('footer.php') ?>
    </body>
</html>
