<?php
require('function.php');
getuser();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="graph.css">
        <title>Page admin</title>
    </head>
    <body>

    <heading class="primary">
            <p class="title">
                Graphique de pourcentage de connexion
            </p>
    </heading>

    <div class="box1">
        <div class="heading_box">
            <p class="heading_primary">
            Statistiques pour les jours du mois actuel.
            </p>
        </div>
        <div class="graph-cont">
            <?php howMuchDays() ?>
        </div>
    </div>

    <div class="box1">
        <div class="heading_box">
            <p class="heading_primary">
            Statistiques pour les années.
            </p>
        </div>
        <div class="graph-cont">
            <?php howMuchYears() ?>
        </div>
    </div>

    <div class="box1">
        <div class="heading_box">
            <p class="heading_primary">
            Statistiques pour les mois de l'année actuelle.
            </p>
        </div>
        <div class="graph-cont">
            <?php howMuchMonth() ?>
        </div>
    </div>
  
    </body>
</html>

      