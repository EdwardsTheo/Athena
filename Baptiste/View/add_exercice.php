<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Public/styles/add_exercice.css">
        <link rel="stylesheet" href="Public/styles/home_student.css">
        <link rel="stylesheet" href="Public/styles/button.css">
        <link rel="stylesheet" href="Public/styles/font.css">
        <title>add exercice</title>
    </head>
    
    <body>
    <?php require("header.php"); ?>

    <div class="heading">    
        <p class="heading_primary heading_class">
            Bonbon.js
        </p>
    </div>
    
    <section class="main_add_exo">
       <div class="box_ressource ressource">
            <div class="choose_chapter">
                <div class="heading_zone">    
                    <p class="heading_zone_class">
                    Choisir un Chapitre
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
                    <p class="heading_zone_class">
                    Choisir un Cours
                    </p>
                </div>
                <form action="#" class="form_index">
                    <div class="check">
                        <input type="checkbox" class="btn_index" value="1" id="btn"><label for="html">HTML5</label>
                    </div>
                    <div class="check">
                        <input type="checkbox" class="btn_index" value="2" id="btn"><label for="css">CSS3</label>
                    </div>
                    <div class="check">
                        <input type="checkbox" class="btn_index" value="3" id="btn"><label for="exemple">Exemples HTML5/CSS3</label>
                    </div>
                    <div class="check">
                        <input type="submit" class="btn_news btn_text btn_prof" value="Ajouter ressources" id="btn">
                    </div>
                </form>
            </div>
        </div>

        <div class="box_ressource box_text">
            <textarea class="text_news" id="text_area">Écrivez votre nouvelle annonce !</textarea>
        </div>

    </section>

    <section class=bottom_add_exo>
    </section>
        
    <?php require("footer.php"); ?>
    </body>
</html>