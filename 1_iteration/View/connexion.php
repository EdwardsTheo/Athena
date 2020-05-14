<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../Public/styles/connexion.css">
        <link rel="stylesheet" href="../Public/styles/button.css">
        <link rel="stylesheet" href="../Public/styles/font.css">
        <title></title>
    </head>
    <body>
        <section class="main"> 
            <div class="logo-box1">
               <img src="../Public/intechlogo/logovert.png" alt="Logo1" class="logo1">
            </div>
            <h1 class="heading-primary">
                <span class="heading-primary1">Athéna</span>
            </h1>
            <section class="section-book">
                <div class="row">
                    <div class="book">
                    <?php 
                            if(isset($_GET["error"])){
                                $error = $_GET["error"];
                                if ($error == "1"){
                                    echo "Veuillez ne pas trafiquer le formulaire s'il vous plait";
                                }
                                elseif ($error == "2") {
                                    echo "L'email et/ou le mot de passe sont incorrects";
                                }
                            }
                        ?>
                         <form action="index.php?action=connecter.php" class="form" method="POST">
                           <div class="u-margin-bottom-medium">
                                <h2 class="heading-secondary">
                                    Connectez-vous avec votre adresse email intech
                                </h2>
                            </div>
                            <div class="form_group">
                            <input type="email" class="form_input" placeholder="Email" id="name" name="email" pattern=".+@intechinfo.fr" required>
                                
                            </div>
                            <div class="form_group">
                                <input type="password" class="form_input" placeholder="Mot de passe" id="password" name="password" required>
                                
                            </div>
            
                            <div class="form_group">
                                <input type="submit" class="btn btn--green" name="button" value="Connection">
                            </div>
                        </form>
                    </div>
                 </div>
            </section>
        </section> 
    </body>
</html>
