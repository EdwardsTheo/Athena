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

    <div class="heading">    
        <p class="heading_primary heading_class">
            Ajouter un exercice
        </p>
    </div>
    
    <section class="main_add_exo">
       <div class="box_ressource ressource_add">
            <div class="choose_chapter">
                <div class="heading_zone">    
                    <p class="heading_zone_class heading_ressource">
                    Lier des ressources de cours à l'exercice.
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
                    Choisir une rubrique
                    </p>
                </div>
                <form action="#" class="form_index check_box">
                    <div class="check">
                        <input type="checkbox" class="btn_check" id="btn"><label for="html" class="label_class">HTML5</label>
                    </div>
                    <div class="check">
                        <input type="checkbox" class="btn_check" id="btn"><label for="css"  class="label_class">CSS3</label>
                    </div>
                    <div class="check">
                        <input type="checkbox" class="btn_check" id="btn"><label for="exemple"  class="label_class">Exemples HTML5/CSS3</label>
                    </div>
                    <div class="add">
                        <input type="submit" class="btn_news btn_text btn_prof" value="Ajouter ressources" id="btn">
                    </div>
                </form>
            </div>
        </div>

        <div class="box_text">
            <div class="box_ressource order">
                <div class="heading_zone">    
                    <p class="heading_zone_class heading_ressource">
                    Consigne de l'exercice
                    </p>
                </div>
                <div class="text_area_consigne">
                <form action="#" class="form_bottom">
                    <textarea class="text_consigne" id="text_area">Consigne de l'exercice</textarea>
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
                    <input type="submit" class="btn btn--green btn_bottom2" value="Ajouter Exercice" id="btn">
                </form>
            </div>
        </div>

    </section>

    <section class=bottom_add_exo>
    </section>
        
    <?php require("footer.php"); ?>
    </body>
</html>