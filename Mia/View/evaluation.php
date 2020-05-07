<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Public/styles/evaluation.css">
        <link rel="stylesheet" href="Public/styles/button.css">
        <link rel="stylesheet" href="Public/styles/font.css">
        <title>evaluation</title>
    </head>
    <body>
        <?php
            require("header.html");
        ?>
        <form action="#" method="POST">
            <div class="all">
                <div class="up">
                    <div class="left_up">
                        <div class="test">
                            <div class="deroulant"> Exercices de l'evaluation
                                <ul class="sous">
                                    <li><a href="#">Exercice 1</a></li>
                                    <li><a href="#">Exercice 2</a></li>
                                    <li><a href="#">Exercice 3</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="right_up">
                        <textarea id="contenu_exo" name="contenu_exo" cols="100" rows="20" readonly></textarea><br/>
                    </div>
                </div>
                <div class="down">
                        <div id="dropfile">Drop l'output</div>
                        <input type="submit" name="bouton" value="Confirmer evaluation" class="btn">
                    </form>
                </div>
            </div>
        
        <?php 
            require("footer.html");
        ?>
    </body>
</html>