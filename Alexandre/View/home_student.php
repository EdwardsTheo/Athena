<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Public/styles/home_student.css">
        <link rel="stylesheet" href="Public/styles/box.css">
        <link rel="stylesheet" href="Public/styles/progress_bar.css">
        <link rel="stylesheet" href="Public/styles/font.css">
        <link rel="stylesheet" href="Public/styles/button.css">
        <link rel="stylesheet" href="Public/styles/heading.css">
    </head>

    <body>
    <?php require("header.php"); ?>
        <section class="home_class">
            <div class="heading">
                <p class=heading_primary>
                    <?php title() ?>
                </p>
            </div>
            <div class="box_student">
                <div class="box basic_box box-1">
                    <svg class="box basic_box box-nav__icon">
                        <use xlink:href="Public/svg/symbol-defs.svg#icon-book"></use>
                    </svg>
                    <h3 class="heading-tertiary">
                        Avancement Cours</h3>
                    <p class="feature-percent">
                        20%
                    </p>
                </div>
                <div class="box basic_box box-2 news">
                <?php
                
                    $i = 1;
                    while($data = $request2->fetch()){
                        if($i<=2){
                ?>
                        <h3 class="heading_box">News</h3>
                        <div class="contenu">
                            <h4 class="heading_news">Nouvelle du <?php echo $data['date_annonce'] ?></h4>
                            <p class="contenu_new">
                                <?php echo $data['contenu_annonce']; ?>;
                            </p>
                        </div>
                    <?php 
                                $i++;
                            }
                        }
                        $request2->closeCursor();

                    ?>
                </div>
                <div class="box basic_box box-3">
                    <svg class="box-nav__icon">
                        <use xlink:href="Public/svg/symbol-defs.svg#icon-area-graph"></use>
                    </svg>
                    <h3 class="heading-tertiary">
                        Avancement Exercices</h3>
                    <p class="feature-percent">
                        10%
                    </p>
                </div>  
                
            </div>
            <div class="box_progressbar">
                <div class="text-progress">
                    <p class="main-advancement">
                        Avancement Global
                    </p>
                </div> 
                <div class="progress-bar">
                    <span style="width: 15%">15%</span>
                </div>
            </div>
            <div class="main_student">
                <div class="student info">
                <?php if(!isset($_POST['Profil'])){ ?>
                   <div class="information_box">
                        <h3 class="heading_box heading_student">Informations profil</h3>
                        <div class ="box_info label_profil">
                        <?php 
                            echo '<label for="prenom" class="profil_titre">Prénom : '.$_SESSION["prenom"].'</label>
                            <label for="nom" class="profil_titre">Nom : '.$_SESSION["nom"].'</label>
                            <label for="email" class="profil_titre">Email : '. $_SESSION["email"].'</label>';
                        ?>                   
                        </div>

                        <div class="box_mdp">
                            <form action="index.php?action=home_student.php" class="form_mdp" method='POST'>
                                <h4 class="heading_news heading_student">Modifiez votre mot de passe</h4>  
                                <input type="password" class="form_input" placeholder="Nouveau Mot De Passe" id="mdp" name='mdp'>
                                <input type="submit" class="btn_mdp btn btn--green" value="Modifier votre mot de passe" id="btn">
                                </BR>
                                <center>
                                    <?php 
                                        ErrorMessage();
                                    ?>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <div class="student redirect">
                    <div class="red red1">
                        <div class="red_title">
                            <h3 class="heading_redirect">
                            <?php titleLastCours(); ?>
                            </h3>
                        </div>
                        <div class="red_contenu">
                            <label for="chapitre" class="redirect_titre">Chapitre : Introduction à JavaScript.</label>
                            <label for="cours" class="redirect_titre">Nom du Cours : Les Variables.</label>
                        </div>
                        <div class="red_bouton">
                            <a href="#" class="btn-red btn btn--green ">Rediriger</a>
                        </div>
                    </div>
                    <div class="red red2">
                        <div class="red_title">
                            <h3 class="heading_redirect">
                            <?php titleLastExercice(); ?>
                            </h3>
                        </div>
                        <div class="red_contenu">
                            <label for="chapitre" class="redirect_titre">Chapitre : Introduction à JavaScript.</label>
                            <label for="exercice" class="redirect_titre">Nom de l'exercice : Bonbon.js.</label>
                        </div>
                        <div class="red_bouton">
                            <a href="#" class="btn-red btn btn--green ">Rediriger</a>
                        </div>
                    </div> 
                </div>
            </div>
        </section>  
    <?php require("footer.php"); ?>
    </body>
</html>