<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page des chapitres</title>
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
                    <input type="submit" class="btn btn--green btn_section " value="Afficher" id="btn" name='afficher'><br/>
                    <input type="hidden"  id="btn" name="SVG" value="../Public/svg/symbol-defs.svg#icon-tux"><br/>
                    <input type="hidden"  id="btn" name="rubrique" value="1"><br/>
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
                    <input type="submit" class="btn btn--green btn_section " value="Afficher" id="btn" name="afficher"><br/>
                    <input type="hidden"  id="btn" name="SVG" value="../Public/svg/symbol-defs.svg#icon-javascript"><br/>
                    <input type="hidden"  id="btn" name="rubrique" value="2"><br/>
                        
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
                    <input type="submit" class="btn btn--green btn_section " value="Afficher" id="btn" name="afficher"><br/>
                    <input type="hidden"  id="btn" name="SVG" value="../Public/svg/symbol-defs.svg#icon-html-five"><br/>
                    <input type="hidden"  id="btn" name="rubrique" value="3"><br/>
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
                    <input type="submit" class="btn btn--green btn_section " value="Afficher" id="btn" name="afficher"><br/>
                    <input type="hidden"  id="btn" name="SVG" value="../Public/svg/symbol-defs.svg#icon-datacamp"><br/>
                    <input type="hidden"  id="btn" name="rubrique" value="4"><br/>
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
                    <input type="submit" class="btn btn--green btn_section " value="Afficher" id="btn" name="afficher"><br/>
                    <input type="hidden"  id="btn" name="SVG" value="../Public/svg/symbol-defs.svg#icon-terminal"><br/>
                    <input type="hidden"  id="btn" name="rubrique" value="5"><br/>
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
        <?php 
            if (isset($_GET['afficher']) AND $_GET['afficher'] == 'Afficher') {
                include($content_for_layout);
            }                                  
        ?>
        
    </section>
<?php require('footer.php') ?>
</body>