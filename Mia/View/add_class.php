<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Public/styles/add_exercice.css">
        <link rel="stylesheet" href="Public/styles/add_class.css">
        <link rel="stylesheet" href="Public/styles/home_student.css">
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
                Ajouter un cours
            </p>
        </div>
        
        <section class="main_add_exo main_add_class">
            <div class="box_ressource ressource_add">
                <div class="choose_chapter">
                    <div class="heading_zone">    
                        <p class="heading_zone_class heading_ressource">
                        Choix du chapitre ou le cours sera ajouté
                        </p>
                    </div>
                <form action="#" class="form_index">
                        <input type="submit" class="btn_index btn_add_exo" value="Prise en main de Linux" id="btn">
                        <input type="submit" class="btn_index btn_add_exo" value="Apprendre à programmer" id="btn">
                        <input type="submit" class="btn_index btn_add_exo" value="Initiation à HTML5" id="btn" checked>
                        <input type="submit" class="btn_index btn_add_exo" value="Structure de données" id="btn">
                        <input type="submit" class="btn_index btn_add_exo" value="PERL" id="btn">
                    </form>
                </div>
                <div class="choose_class">
                    <div class="heading_zone">    
                        <p class="heading_zone_class heading_ressource">
                        Choisir la rubrique
                        </p>
                    </div>
                    <form action="#" class="form_index">
                        <input type="submit" class="btn_index btn_add_exo" value="HTML5" id="btn">
                        <input type="submit" class="btn_index btn_add_exo" value="CSS3" id="btn">
                        <input type="submit" class="btn_index btn_add_exo" value="Exemples HTML5/CSS3" id="btn" checked>
                    </form>
                    <form action="#" class="form_add">
                        <div class="input_text">
                            <input type="text" class="form_input form_text" placeholder="Nouvelle rubrique" id="mdp">
                        </div>
                        <div class="add">
                            <input type="submit" class="btn_news btn_text btn_prof" value="Ajouter une rubrique" id="btn">
                        </div>
                    </form>
                </div>
            </div>
            <div class="box_text">
                <div class="box_ressource order">
                    <div class="heading_zone">    
                        <div class="input_text">
                            <input type="text" class="form_input" placeholder="Titre du cours" id="mdp">
                        </div>
                    </div>
                    <div class="text_area_consigne">
                        <textarea class="text_consigne" id="text_area">Contenue du Cours</textarea>
                    </div>
                </div>
                <div class="validation box_add">
                    <form action="#" class="form_bottom">
                        <input type="submit" class="btn btn--green btn_bottom2" value="Ajouter Cours" id="btn">
                    </form>
                </div>
            </div>
        </section>

    <?php require("footer.php"); ?>
    </body>
</html>