<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Public/styles/home_prof.css">
        <link rel="stylesheet" href="Public/styles/home_student.css">
        <link rel="stylesheet" href="Public/styles/font.css">
        <link rel="stylesheet" href="Public/styles/button.css">
        <link rel="stylesheet" href="Public/styles/class.css">
        <title>Page de cours</title>
    </head>
    <body>
    <?php require("header.php"); ?>

    <section class="class">
        <div class="heading">    
            <p class="heading_primary heading_class">
                Node.js - valeurs et variables
            </p>
        </div>
        <div class="main_class">
            <div class="box_class index">
                <div class="head_btn">
                    <a href="#" class="btn-text_index">&larr; Retour au choix du cours</a>
                </div>
                <form action="#" class="form_index">
                    <input type="submit" class="btn_index" value="01 Valeur et information" id="btn">
                    <input type="submit" class="btn_index" value="02 Valeurs de type primitif" id="btn">
                    <input type="submit" class="btn_index" value="03 Variables" id="btn">
                    <input type="submit" class="btn_index" value="04 Nom des Variables" id="btn">
                    <input type="submit" class="btn_index" value="05 Choix du nom des variables" id="btn">
                    <input type="submit" class="btn_index" value="06 Snake case / Camel case" id="btn">
                    <input type="submit" class="btn_index" value="07 Déclaration des variables" id="btn">
                </form>
                <div class="bottom_btn">
                    <input type="submit" class="btn_news" value="Modifier rubrique" id="btn">
                </div>
            </div>
            <div class="box_class zone_class">
                <div class="heading_zone">    
                    <p class="heading_zone_class">
                    Valeurs de type primitif
                    </p>
                </div>
                <div class="text_class">
                    <p class="text">
                    -Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <p class="text">
                        -Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <p class="text">
                        -Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
                <div class="box_btn">
                    <form action="#" class="form_index">
                        <input type="submit" class="btn_news btn_text btn_prof" value="Modifier" id="btn">
                        <input type="submit" class="btn_news btn_text btn_prof" value="Correction &rarr;" id="btn">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php require("footer.php"); ?>
    </body>
</html>