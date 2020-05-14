<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices</title>
    <link rel="stylesheet" href="../Public/styles/home_prof.css">
    <link rel="stylesheet" href="../Public/styles/home_student.css">
    <link rel="stylesheet"  href="../Public/styles/exercice.css">
    <link rel="stylesheet"  href="../Public/styles/header.css">
    <link rel="stylesheet"  href="../Public/styles/button.css">
    <link rel="stylesheet"  href="../Public/styles/font.css">
</head>
<body>
<?php require('header.php') ?>

<section class="class">
    <div class="heading">    
        <p class="heading_primary heading_class">
            Bonbon.js
        </p>
    </div>
    
    <div class="main_class">
        <div class="box_class index">
            <div class="head_btn">
                <a href="#" class="btn-text_index">&larr; Retour au choix des exercices</a>
            </div>
            <div class="heading_zone">    
                    <p class="heading_zone-rubrik">
                        Ressources necessaires
                    </p>
            </div>
            <div class="form_index">
                <a href="#" class="btn-text_index ressource">Node JS: valeurs et variables </a>
                <a href="#" class="btn-text_index ressource">Node JS: structures de contrôle</a>
            </div>
            <div class="bottom_btn">
                <input type="submit" class="btn_news" value="Modifier rubrique" id="btn">
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
        <div class="box_btn">
            <input type="submit" class="btn_news btn_text btn_prof" value="Modifier consigne" id="btn">
        </div>
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
            <input type="submit" class="btn btn--green btn_bottom1" value="Correction" id="btn">
            <input type="submit" class="btn btn--green btn_bottom2" value="Valider exercice" id="btn">
            <input type="submit" class="btn btn--green btn_bottom3" value="Exercice suivant &rarr;" id="btn">
        </form>
    </div>
</section>
<?php require('footer.php') ?>
</body>
