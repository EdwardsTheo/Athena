<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Public/styles/home_prof.css">
        <link rel="stylesheet" href="Public/styles/font.css">
        <link rel="stylesheet" href="Public/styles/button.css">
        <link rel="stylesheet" href="Public/styles/home_student.css">
        <link rel="stylesheet" href="Public/styles/box.css">
        <link rel="stylesheet" href="Public/styles/heading.css">
        <title>Page d'accueil du Professeur</title>
    </head>
    <body>
    <?php require("header.php"); ?>
    
    <section class="home_prof">
        <div class="heading">
            <p class="heading_primary heading_prof">
                Bienvenue Professeur !
            </p>
        </div>
        <div class="top">
            <div class="box_prof">
               <div class="basic_box box info_box">
                    <h3 class="heading_box heading_student">Informations profil</h3>
                    <div class ="box_info label_profil">
                    <?php 
                        echo '<label for="prenom" class="profil_titre">Prénom : '.$_SESSION["prenom"].'</label>
                        <label for="nom" class="profil_titre">Nom : '.$_SESSION["nom"].'</label>
                        <label for="email" class="profil_titre">Email : '. $_SESSION["email"].'</label>';
                    ?>
                    </div>
                        
                    <div class="box_mdp">
                        <form action="index.php?action=home_prof.php" class="form_mdp" method='POST'>
                            <h4 class="heading_news_prof heading_student">Modifiez votre mot de passe</h4>  
                            <input type="password" class="form_input" placeholder="Nouveau Mot De Passe" id="mdp" name='mdp'>
                            <input type="submit" class="btn_mdp btn btn--green" value="Modifier votre mot de passe" id="btn">
                            </BR>
                                <center>
                                    <?php 
                                        ErrorMessages();
                                    ?>
                                </center>
                        </form>
                    </div>
                </div>
                <?php 
                $i = 1; 
                    while($data = $request2->fetch()){
                        if($i<2){
                ?>
                            <div class="basic_box box info_box">
                                <h3 class="heading_box">News</h3>
                                <div class="contenu_prof">
                                    <h4 class="heading_news_prof">Nouvelle du <?php echo $data['date_annonce'] ?></h4>
                                    <p class="contenu_new">
                                        <?php 
                                            echo '<b>'.$data['nom_annonce'].'</b></br>';
                                            echo $data['contenu_annonce'];
                                        ?>
                                    </p>
                                    <?php editAnnonce($data)?>
                                    <form action="index.php?action=home_prof.php" class="form_news" method='post'>
                                        <input type="submit" class="btn-text btn_news" value="Modifier l'annonce" id="btn" name='edit'>
                                        <input type="submit" class="btn-text btn_news" value="Supprimer l'annonce" id="btn" name = 'delete'>
                                        <?php     
                                            //refresh();
                                        ?>
                                    </form>
                                </div>
                                <?php delAnnonce($data); ?>
                    <?php 
                            $i++;
                            } 
                        }  
                        $request2->closeCursor();
                    ?>
                    <div class="contenu_prof add_news">
                        <h4 class="heading_news_prof">Ajouter une annonce</h4>
                        <form action="index.php?action=home_prof.php" class="form_news_add" method='POST'>
                            <textarea class="text_news" id="text_area" name='titre_annonce' placeholder="Titre de votre annonce"></textarea>
                            <textarea class="text_news" id="text_area" name='annonce' placeholder="Écrivez votre nouvelle annonce !"></textarea>
                            <input type="submit" class="btn_add btn--green btn_news" value="Ajouter une annonce" id="btn" name='add'>
                            <?php     
                                //refresh();
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="heading">
                <p class="heading_primary heading_prof">
                    Outils
                </p>
            </div>
            <div class="prof_redirect">
                <div class="red_prof">
                    <svg class="box-nav_prof">
                        <use xlink:href="Public/svg/symbol-defs.svg#icon-eye"></use>
                    </svg>
                    <h3 class="heading_red">
                    Suivre votre classe</h3>
                    <div class="red_bouton">
                        <a href="index.php?action=visu_class.php" class="btn-red btn btn--green ">Classe</a>
                    </div>
                </div>
                <div class="red_prof">
                    <svg class="box-nav_prof">
                        <use xlink:href="Public/svg/symbol-defs.svg#icon-book"></use>
                    </svg>
                    <h3 class="heading_red">
                        Créer un cours</h3>
                    <div class="red_bouton">
                        <a href="index.php?action=add_class.php" class="btn-red btn btn--green ">Cours</a>
                    </div>
                </div>
                <div class="red_prof">
                    <svg class="box-nav_prof">
                        <use xlink:href="Public/svg/symbol-defs.svg#icon-new-message"></use>
                    </svg>
                    <h3 class="heading_red">
                    Créer un exercice</h3>
                    <div class="red_bouton">
                        <a href="index.php?action=add_exercice.php" class="btn-red btn btn--green ">Exercices</a>
                    </div>
                </div>
                <div class="red_prof">
                    <svg class="box-nav_prof">
                        <use xlink:href="Public/svg/symbol-defs.svg#icon-hour-glass"></use>
                    </svg>
                    <h3 class="heading_red">
                    Créer une evalutation </h3>
                    <div class="red_bouton">
                        <a href="index.php?action=home_add_evaluation.php" class="btn-red btn btn--green ">Evaluation</a>
                    </div>
                </div>
            </div>
        </div>
    
    </section>


    <?php require("footer.php"); ?>
    </body>
</html>