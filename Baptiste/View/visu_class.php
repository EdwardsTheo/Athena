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

    <section class="visu">
        <div class="heading">
            <p class="heading_primary">
            Votre Classe
            </p>
        </div>
        <div class="box_row">
            <div class="red_section">
                <svg class="box-nav_section">
                    <use xlink:href="Public/svg/symbol-defs.svg#icon-user1"></use>
                </svg>
                <h3 class="heading_red">
                Theobald Baptiste</h3>
                <div class="zone_progress">
                    <div class="progress-bar progress_exo">
                        <span style="width: 15%">15%</span>
                    </div>
                    <div class="progress-bar progress_exo">
                        <span style="width: 15%">15%</span>
                    </div>
                </div>
                <form action="#" class="form_mdp">
                    <input type="submit" class="btn btn--green btn_section " value="Aller voir dernier exercice" id="btn">
                </form>
            </div>
        </div>
    </section>
    <?php require('footer.php') ?>
</body>
</html>
