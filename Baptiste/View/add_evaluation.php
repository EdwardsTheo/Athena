<!doctype html>
<head>
    <meta charset="utf-8">
    <title>Ajouter Evaluation</title>
    <link rel="stylesheet" type="text/css" href="../../Baptiste/Public/styles/button.css">
    <link rel="stylesheet" type="text/css" href="../Public/styles/add_evaluation.css"/>
    <link rel="stylesheet" type="text/css" href="../Public/css.css"/>

</head>
<body>
<?php 
    require('header.html');
?>
    <center>
    <div class="all">
        <div class="resumer_exo">
            <div class='tableau' style='overflow:scroll; border:#000000 1px solid; width:400px; height: 250px;'>
                <table>
                    <H3>Résumer exercice</H3>
                </table>
            </div>
        </div>
        <div class="horraire">
            <p>Date, heure de lancement</p>
            <p>Date, heure de fin</p>
            <input type="submit" name="valider_eval" value="Valider évaluation">
        </div>
        <div class="exercice">
            <h3>Titre de l'excercie</h3> 
            <p>Consigne de L'exercice</p> 
            <input type="submit" name="add_evaluation" value="Ajouter exercice à l'évaluation">
        </div>
    </div>
    <?php require('footer.html')?>
    </center>
</body>
