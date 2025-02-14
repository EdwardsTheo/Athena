<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Public/styles/connexion.css">
        <link rel="stylesheet" href="Public/styles/heading.css">
        <link rel="stylesheet" href="Public/styles/button.css">
        <link rel="stylesheet" href="Public/styles/font.css">
        <title>Page de connexion</title>
    </head>

    <body>

        <div class="heading">    
                <p class="heading_primary">Page de connexion</p>
        </div>
        <div class="error">
            <?php 
            if(isset($_GET["error"])){
                $error = $_GET["error"];
                if ($error == "1"){
                    echo "Veuillez rentrer les bonnes informations";
                }
                elseif ($error == "2") {
                    echo "L'email et/ou le mot de passe sont incorrects";
                }
                
            }
        ?>
        </div> 
        <section class="main">
            <div class="book">
               <form action="index.php?action=connecter.php" class="form" method="POST">
                    <div class="u-margin-bottom-medium">
                        <p class="heading-secondary">
                            Connectez-vous avec votre adresse email IN'TECH
                        </p>
                    </div>
                    <div class="form_group">
                        <input type="text" class="form_input" placeholder="Email" id="name" pattern=".+@intechinfo.fr" name="email" required>
                    </div>
                    <div class="form_group">
                        <input type="password" class="form_input" placeholder="Mot de passe" id="password" name="password" required>
                    </div>
                    <div class="form_group">
                        <input type="submit" class="btn btn--green" name="button" value="Connexion">
                    </div>
                </form>
            </div>
            <div class="logo-box1">
                <img src="Public/intechlogo/logovert.png" alt="Logo1" class="logo1">
            </div>
        </section> 
    </body>
</html>

