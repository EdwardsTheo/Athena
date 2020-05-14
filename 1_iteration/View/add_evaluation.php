<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/styles/button.css">
    <link rel="stylesheet" href="Public/styles/add_evaluation.css"/>
    <link rel="stylesheet" href="Public/styles/add_exercice.css">
    <link rel="stylesheet" href="Public/styles/add_class.css"> 
    <link rel="stylesheet" href="Public/styles/home_student.css">
    <link rel="stylesheet" href="Public/styles/exercice.css">
    <title>Ajouter Evaluation</title>

</head>
    <body>
    <?php require('header.php'); ?>
    
    <div class="heading">    
        <p class="heading_primary heading_class">
            Créer une évaluation
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
                <form action="index.php?action=exercice.php" class="form_index" method="GET">
                    <input type="submit" class="btn_index btn_add_exo" value="Bonbon.js" id="btn">
                    <input type="submit" class="btn_index btn_add_exo" value="Exercice Facile" id="btn">
                    </form>
                </div> 
            </div>
        </div>
        <div class="box_text">
                <div class="box_ressource order">
                    <div class="heading_zone">    
                        <div class="input_text">
                            <input type="text" class="form_input" placeholder="Titre de l'exercice" id="mdp">
                        </div>
                    </div>
                    <div class="text_area_consigne">
                        <textarea class="text_consigne" id="text_area">Consigne de l'exercice</textarea>
                    </div>
                </div>
                <div class="validation box_add">
                    <form action="#" class="form_bottom">
                        <input type="submit" class="btn btn--green btn_bottom2" value="Ajouter l'exercice" id="btn">
                    </form>
                </div>
            </div>
    </section> 

    <section class="bottom_add_eval">
        <div class="bottom_button">
            <form action="#" class="form_bottom">
                <input type="text" class="form_input form_date" placeholder="Date et Heure de début" id="mdp">
                <input type="text" class="form_input form_date" placeholder="Date et Heure de fin" id="mdp">
                <input type="submit" class="btn btn--green btn_bottom3" value="Lancer le compte à rebours !" id="btn">
            </form>
        </div>
    </section> 

    <?php require('footer.php')?>
    </body>
</html>
