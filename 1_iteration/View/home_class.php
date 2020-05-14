<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de cours</title>
    <link rel="stylesheet" href="../Public/styles/home_prof.css">
    <link rel="stylesheet" href="../Public/styles/home_student.css">
    <link rel="stylesheet" href="../Public/styles/home_exercice.css">
    <link rel="stylesheet" href="../Public/styles/header.css">
    <link rel="stylesheet" href="../Public/styles/button.css">
    <link rel="stylesheet" href="../Public/styles/font.css">
    <link rel="stylesheet" href="../Public/styles/test.css">
</head>
<body>
<?php require('header.php') ?>

<section class="choose_sec">
        <div class="heading">
            <p class="heading_primary">
            INDEX DES CHAPITRES
            </p>
        </div>
        <div class="box_row">
            <div class="red_section">
                <svg class="box-nav_section">
                    <use xlink:href="../Public/svg/symbol-defs.svg#icon-tux"></use>
                </svg>
                <h3 class="heading_red">
                Prise en main de Linux</h3>
                <div class="progress-bar progress_exo">
                    <span style="width: 15%">15%</span>
                </div>
                <form action="" class="form_mdp" method="GET">
                    <input type="submit" class="btn btn--green btn_section " value="Afficher" id="btn" name="cours_1"><br/>
                    <table>          
                        <?php 
                            if (isset($_GET['cours_1'])) {
                                require('../Modele/afficher_cours.php');
                            }
                        ?>
                    </table>
                </form>
            </div>
            <div class="red_section">
                <svg class="box-nav_section">
                    <use xlink:href="../Public/svg/symbol-defs.svg#icon-javascript"></use>
                </svg>
                <h3 class="heading_red">
                Apprendre à programmer</h3>
                <div class="progress-bar progress_exo">
                    <span style="width: 30%">30%</span>
                </div>
                <form action="" class="form_mdp" method="GET">
                    <input type="submit" class="btn btn--green btn_section " value="Afficher" id="btn" name="cours_2"><br/>
                    <table>
                            <?php 
                                if (isset($_GET['cours_2'])) {
                                    require('../Modele/afficher_cours.php');
                                }                                
                            ?>
                    </table>
                </form>
            </div>
            <div class="red_section">
                <svg class="box-nav_section">
                    <use xlink:href="../Public/svg/symbol-defs.svg#icon-html-five"></use>
                </svg>
                <h3 class="heading_red">
                Initiation à HTML5</h3>
                <div class="progress-bar progress_exo">
                    <span style="width: 25%">25%</span>
                </div>
                <form action="" class="form_mdp">
                    <input type="submit" class="btn btn--green btn_section " value="Afficher" id="btn" name="cours_3"><br/>
                    <table>

                            <?php 
                                if (isset($_GET['cours_3'])) {
                                    require('../Modele/afficher_cours.php');                                
                                }
                            ?>

                    </table>
                </form>
            </div>
            <div class="red_section">
                <svg class="box-nav_section">
                    <use xlink:href="../Public/svg/symbol-defs.svg#icon-datacamp"></use>
                </svg>
                <h3 class="heading_red">
                Structure de données</h3>
                <div class="progress-bar progress_exo">
                    <span style="width: 15%">15%</span>
                </div>
                <form action="" class="form_mdp">
                    <input type="submit" class="btn btn--green btn_section " value="Afficher" id="btn" name="cours_4"><br/>
                    <table>

                            <?php 
                                if (isset($_GET['cours_4'])) {
                                    require('../Modele/afficher_cours.php');                                
                                }
                            ?>

                    </table>
                </form>
            </div>
            <div class="red_section">
                <svg class="box-nav_section">
                    <use xlink:href="../Public/svg/symbol-defs.svg#icon-terminal"></use>
                </svg>
                <h3 class="heading_red">
                PERL</h3>
                <div class="progress-bar progress_exo">
                    <span style="width: 0%">0%</span>
                </div>
                <form action="" class="form_mdp">
                    <input type="submit" class="btn btn--green btn_section " value="Afficher" id="btn" name="cours_5"><br/>
                    <table>

                            <?php 
                                if (isset($_GET['cours_5'])) {
                                    require('../Modele/afficher_cours.php');                                
                                }
                            ?>

                    </table>
                </form>
            </div>
        </div>
    </section>
    
    <section class="choose_exo">
        <div class="heading">
            <p class="heading_primary">
            RUBRIQUES
            </p>
        </div>
        <div class="box_row">
            <div class="red_section red_exo">
                <svg class="box-nav_exo">
                    <use xlink:href="../Public/svg/symbol-defs.svg#icon-javascript"></use>
                </svg>
                <h3 class="heading_red heading_exo">
                Valeurs et variables
                </h3>
                <div class="status">
                    <p class="message">
                    Cours lu
                    </p>
                    <svg class="box-nav_exo">
                        <use xlink:href="../Public/svg/symbol-defs.svg#icon-check"></use>
                    </svg>
                </div>  
                <form action="#" class="form_mdp">
                    <input type="submit" class="btn btn--green btn_section " value="Afficher" id="btn">
                </form>
            </div>
            <div class="red_section red_exo">
                <svg class="box-nav_exo">
                    <use xlink:href="../Public/svg/symbol-defs.svg#icon-javascript"></use>
                </svg>
                <h3 class="heading_red heading_exo">
                Structures de contrôle
                </h3>
                <div class="status">
                    <p class="message">
                    Cours lu
                    </p>
                    <svg class="box-nav_exo">
                        <use xlink:href="../Public/svg/symbol-defs.svg#icon-check"></use>
                    </svg>
                </div>  
                <form action="#" class="form_mdp">
                    <input type="submit" class="btn btn--green btn_section " value="Afficher" id="btn">
                </form>
            </div>
            <div class="red_section red_exo">
                <svg class="box-nav_exo">
                    <use xlink:href="../Public/svg/symbol-defs.svg#icon-javascript"></use>
                </svg>
                <h3 class="heading_red heading_exo">
                Fonction
                </h3>
                <div class="status">
                    <p class="message">
                    Continuez la lecture
                    </p>
                    <svg class="box-nav_exo">
                        <use xlink:href="../Public/svg/symbol-defs.svg#icon-circle-with-cross"></use>
                    </svg>
                </div>  
                <form action="#" class="form_mdp">
                    <input type="submit" class="btn btn--green btn_section " value="Afficher" id="btn">
                </form>
            </div>
            <div class="red_section red_exo">
                <svg class="box-nav_exo">
                    <use xlink:href="../Public/svg/symbol-defs.svg#icon-javascript"></use>
                </svg>
                <h3 class="heading_red heading_exo">
                Objet et tableau
                </h3>
                <div class="status">
                    <p class="message">
                    Commencez le cours !
                    </p>
                    <svg class="box-nav_exo">
                        <use xlink:href="../Public/svg/symbol-defs.svg#icon-circle-with-cross"></use>
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