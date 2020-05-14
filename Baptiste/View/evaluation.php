<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Evaluation</title>
        <link rel="stylesheet" href="Public/styles/home_prof.css">
        <link rel="stylesheet" href="Public/styles/home_student.css">
        <link rel="stylesheet" href="Public/styles/add_evaluation.css"/>
        <link rel="stylesheet" href="Public/styles/add_exercice.css">
        <link rel="stylesheet" href="Public/styles/add_class.css"> 
        <link rel="stylesheet" href="Public/styles/exercice.css">
        <link rel="stylesheet" href="Public/styles/header.css">
        <link rel="stylesheet" href="Public/styles/button.css">
        <link rel="stylesheet" href="Public/styles/font.css">
    </head>
    <body>
    <?php require("header.php"); ?>
   
    <div class="heading">    
        <p class="heading_primary heading_class">
            Evaluation
        </p>
    </div>
    
    <section class="main_add_exo main_add_class">
        <div class="box_ressource ressource_add">
            <div class="choose_chapter">
                <div class="heading_zone">    
                    <p class="heading_zone_class heading_ressource">
                    Exercices de l'évaluation
                    </p>
                </div>
                <form action="#" class="form_index">
                    <input type="submit" class="btn_index btn_add_exo" value="Bonbon.js" id="btn">
                    <input type="submit" class="btn_index btn_add_exo" value="Exercice Facile" id="btn">
                    </form>
                </div> 
            </div>
        </div>
        <div class="box_class zone_class">
            <div class="heading_zone">    
                <p class="heading_zone_class">
                    Consigne de l'exercice
                </p>
        </div>
        <div class="text_class">
            <p class="text">
            Ecrire un programme qui demande un bonbon jusqu'à ce qu'on lui ait donné ! 
            </p>
            <p class="text">
            Astuce : vous aurez besoin d'utiliser une boucle while ... 
            </p>
        </div>
    </section> 

<section class="bottom_exercice">
    <div class="drop">
        <div class="box_drop">
            <div class="heading_zone">
                <p class="contenu_new">
                    Déposer votre exercice ici !
                </p>    
            </div>
            <svg class="box_drop_svg">
                <use xlink:href="Public/svg/symbol-defs.svg#icon-install"></use>
            </svg>
        </div>
    </div>
    <div class="bottom_button">
        <form action="#" class="form_bottom">
            <input type="submit" class="btn btn--green btn_bottom2" value="Valider Evaluation" id="btn">
        </form>
    </div>
</section>  
        
    <?php require("footer.php"); ?>
    </body>
</html>