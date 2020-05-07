<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Public/styles/add_class.css">
        <link rel="stylesheet" href="Public/styles/button.css">
        <link rel="stylesheet" href="Public/styles/font.css">
        <title></title>
    </head>
    <body>
        <?php
            require("header.html");
        ?>
        <form action="#" method="POST">
            <div class="all">
                <div class="up">
                    <div class="left_up">
                        <input type="checkbox" name="nouveau" value="ajout"> Ajouter un nouveau chapitre
                    </div>
                    <div class="center_up">
                        <span><input type="text" name="chapitre" value="Chapitre" max="50"></span>
                        <span><input type="number" name="index" value="1" min="1"></span>
                        <span><input type="text" name="titre" value="Titre" max="50"></span>
                    </div>
                    <div class="right_up">
                        <textarea id="contenu" name="contenu" cols="70" rows="20" placeholder="Veuillez rentrer ici le contenu du cours"></textarea><br/>
                    </div>
                </div>
                <div class="down">
                    <div class="left_down">
                    </div>
                    <div class="center_down">
                        <input type="submit" name="bouton" value="ajouter" class="btn">
                    </div>
                    <div class="right_down">
                        <a href="#"><button name="chat" id="chat" class="btn">Chat</button></a>
                    </div>
                </div>
            </div>
        </form>
        <?php 
            require("footer.html");
        ?>
    </body>
</html>