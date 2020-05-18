<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
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
                <p class="heading_primary heading_prof">Bienvenue Professeur !</p>
            </div>
            <div class="top">
                <div class="box_prof">
                    <div class="basic_box box info_box">
                        <h3 class="heading_box heading_student">Informations profil</h3>
                        <div class ="box_info label_profil">
                            <label for="prenom" class="profil_titre">Prénom : Thomas</label>
                            <label for="nom" class="profil_titre">Nom : Kerbrat</label>
                            <label for="email" class="profil_titre">Email : kerbrat@intechinfo.fr</label>
                        </div>
                            
                        <div class="box_mdp">
                            <form action="#" class="form_mdp">
                                <h4 class="heading_news heading_student">Modifiez votre mot de passe</h4>  
                                <input type="password" class="form_input" placeholder="Nouveau Mot De Passe" id="mdp">
                                <input type="submit" class="btn_mdp btn btn--green" value="Modifier votre mot de passe" id="btn">
                            </form>
                        </div>
                    </div>
                    <div class="basic_box box news_box">
                        <h3 class="heading_box">News</h3>
                        <div class="contenu_prof">
                            <h4 class="heading_news">Nouvelle du Lundi 29 avril</h4>
                            <p class="contenu_new">
                                Bonjour, n'oubliez pas votre évaluation de demain !
                            </p>
                            <form action="#" class="form_news">
                                <input type="submit" class="btn-text btn_news" value="Modifier l'annonce" id="btn">
                                <input type="submit" class="btn-text btn_news" value="Supprimer l'annonce" id="btn">
                            </form>
                        </div>
                        <div class="contenu_prof">
                            <h4 class="heading_news">Nouvelle du Lundi 13 avril</h4>
                            <p class="contenu_new">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <form action="#" class="form_news">
                                <input type="submit" class="btn-text btn_news" value="Modifier l'annonce" id="btn">
                                <input type="submit" class="btn-text btn_news" value="Supprimer l'annonce" id="btn">
                            </form>
                        </div>
                        <div class="contenu_prof add_news">
                            <h4 class="heading_news">Ajouter une annonce</h4>
                            <form action="#" class="form_news_add">
                                <textarea class="text_news" id="text_area">Écrivez votre nouvelle annonce !</textarea>
                                <input type="submit" class="btn_add btn--green btn_news" value="Ajouter une annonce" id="btn">
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
                            <a href="#" class="btn-red btn btn--green ">Classe</a>
                        </div>
                    </div>
                    <div class="red_prof">
                        <svg class="box-nav_prof">
                            <use xlink:href="Public/svg/symbol-defs.svg#icon-book"></use>
                        </svg>
                        <h3 class="heading_red">
                            Créer un cours</h3>
                        <div class="red_bouton">
                            <a href="#" class="btn-red btn btn--green ">Cours</a>
                        </div>
                    </div>
                    <div class="red_prof">
                        <svg class="box-nav_prof">
                            <use xlink:href="Public/svg/symbol-defs.svg#icon-new-message"></use>
                        </svg>
                        <h3 class="heading_red">
                        Créer un exercice</h3>
                        <div class="red_bouton">
                            <a href="#" class="btn-red btn btn--green ">Exercices</a>
                        </div>
                    </div>
                    <div class="red_prof">
                        <svg class="box-nav_prof">
                            <use xlink:href="Public/svg/symbol-defs.svg#icon-hour-glass"></use>
                        </svg>
                        <h3 class="heading_red">
                        Créer une evalutation </h3>
                        <div class="red_bouton">
                            <a href="#1" class="btn-red btn btn--green ">Evaluation</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    <?php require("footer.php"); ?>
    </body>
</html>