<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Public/styles/font.css">
    <link rel="stylesheet" href="Public/styles/button.css">
    <link rel="stylesheet" href="Public/styles/home_student.css">
    <link rel="stylesheet" href="Public/styles/home_exercice.css">
    <link rel="stylesheet" href="Public/styles/visu_class.css">
    <title>Visu Class</title>
    
</head>
<body>
    <?php require('header.php') ?>

    <div class="heading">
        <p class="heading_primary">
        Votre Classe
        </p>
    </div>

    <section class="visu">
       <div class="box_row box_visu">
            <div class="red_section">
                <svg class="box-nav_section">
                    <use xlink:href="Public/svg/symbol-defs.svg#icon-user1"></use>
                </svg>
                <h3 class="heading_red">
                Theobald Baptiste</h3>
                <div class="activity">
                    <p class="text_activity">
                    Dernière activité: hier à 16 h 25
                    </p>
                </div>    
                <form action="#" class="form_mdp">
                    <input type="submit" class="btn_index btn_add_exo btn_visu" value="Cours" id="btn">
                    <input type="submit" class="btn_index btn_add_exo btn_visu" value="Exercices" id="btn">
                    <input type="submit" class="btn_index btn_add_exo btn_visu" value="Profil" id="btn">
                </form>
            </div>
        </div>
        <div class="box_row box_visu">
            <div class="red_section">
                <svg class="box-nav_section">
                    <use xlink:href="Public/svg/symbol-defs.svg#icon-user1"></use>
                </svg>
                <h3 class="heading_red">
                Alexandre Trillot</h3>
                <div class="activity">
                    <p class="text_activity">
                    Dernière activité: hier à 16 h 22
                    </p>
                </div>    
                <form action="#" class="form_mdp">
                    <input type="submit" class="btn_index btn_add_exo btn_visu" value="Cours" id="btn">
                    <input type="submit" class="btn_index btn_add_exo btn_visu" value="Exercices" id="btn">
                    <input type="submit" class="btn_index btn_add_exo btn_visu" value="Profil" id="btn">
                </form>
            </div>
        </div>
         <div class="box_row box_visu">
            <div class="red_section">
                <svg class="box-nav_section">
                    <use xlink:href="Public/svg/symbol-defs.svg#icon-user1"></use>
                </svg>
                <h3 class="heading_red">
                Mia Salerno</h3>
                <div class="activity">
                    <p class="text_activity">
                    Dernière activité: hier à 16 h 24
                    </p>
                </div>    
                <form action="#" class="form_mdp">
                    <input type="submit" class="btn_index btn_add_exo btn_visu" value="Cours" id="btn">
                    <input type="submit" class="btn_index btn_add_exo btn_visu" value="Exercices" id="btn">
                    <input type="submit" class="btn_index btn_add_exo btn_visu" value="Profil" id="btn">
                </form>
            </div>
        </div>
    </section>
    <?php require('footer.php') ?>
</body>
</html>
