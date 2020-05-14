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
                <form action="index.php?action=home_class.php" class="form_mdp" method="GET">
                    <input type="submit" class="btn btn--green btn_section " value="Afficher" id="btn" name='cours_1'><br/>
                    <table>          
                        <?php
                            if (isset($_GET['cours_1']) AND $_GET['cours_1'] == 'Afficher') {
                                include($content_for_layout);
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
                             if (isset($_GET['cours_3']) AND $_GET['cours_3'] == 'Afficher') {
                                include($content_for_layout);
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
                            if (isset($_GET['cours_4']) AND $_GET['cours_4'] == 'Afficher') {
                                include($content_for_layout);
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
                             if (isset($_GET['cours_5']) AND $_GET['cours_5'] == 'Afficher') { 
                                include($content_for_layout);
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
            <?php 
                if (isset($_GET['cours_2']) AND $_GET['cours_2'] == 'Afficher') {
                    include($content_for_layout);                                  
                }
            ?>
        </div>
    </section>
<?php require('footer.php') ?>
</body>