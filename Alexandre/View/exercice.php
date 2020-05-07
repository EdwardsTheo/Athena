<!DOCTYPE html>
<head>
    <meta cahrset="utf-8">
    <title>Exercices</title>
    <link rel="stylesheet" type="text/css" href="../Public/styles/exercice.css">
    <link rel="stylesheet" type="text/css" href="../../Baptiste/Public/styles/button.css">
</head>
<body>
<?php require('header.html') ?>
<center>
    <div class="all">
        <div class="resources">
            <label class="input-left">
                <center><input type="submit" value="Retour section exos" name="back_exos" class="btn btn--green"></center>
            </label>
            <div class="tableau" style='overflow:scroll; border:#000000 1px solid; width:400px; height: 250px;'>
                <table>
                    <tr>Ressources nécessaires</tr>
                </table> 
            </div>
            <center><input type="submit" value="Ajouter ressources (prof)" name="add_ressource" class="btn btn--green"></center>
        </div>
        <div class="exercices">
            <div class="tableau" style='overflow:scroll; border:#000000 1px solid; width:400px; height: 250px; margin-top:16.5%'>
                <table>
                    <tr>Consigne exercice</tr>
                </table>
            </div>
            <div class="extra">
                <div class="drop">
                    <div class="tableau" style='border:#000000 1px dashed; width:100px; height: 100px;'>
                        <table>
                            <tr>Dépot de fichier (DRAG AND DROP)</tr>
                        </table>
                    </div>
                    <input type="submit" name="valid_exercice" value="Valider exercices" class="btn btn--green" style="font-size: 100%; height:50% width:50%" > 
                </div>
                <div class="option">
                    <div class="input-bottom-right">
                        <input type="submit" name="correction" value="Correction (prof)" class="btn btn--green" style="font-size: 100%; height:75%">
                        <input type="submit" name="edit" value="Modifier (prof)" class="btn btn--green" style="font-size: 100%; height:75%">
                    </div>
                    <div class="input">
                        <input type="submit" name="next_exercie" value="Exercice suivant" class="btn btn--green" style="font-size: 100%; height:75%; margin-left:25%">
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>
<?php require('footer.html') ?>
</body>
