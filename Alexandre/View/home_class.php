<?php 
    require('header.html')
?>
<!doctype html>
<head>
    <meta charset="utf-8">
    <title>Home Class</title>
    <link rel="stylesheet" type="text/css" href="../Public/home_class.css"/>
    <link rel="stylesheet" type="text/css" href="../Public/css.css"/>
</head>
<body>
    <center>
    <div class="all">
        <div class="part">
            <a href="">Prise en main de linux</a>
            <a href="">Apprendre à programmer</a>
            <a href="">Initiation à HTML5</a>
            <a href="">Structure de données</a>
            <a href="">PERL</a>
        </div>
        <div class="bottom">
            <div class="exercice">
                <div class="tableau" style='overflow:scroll; border:#000000 1px solid; width:400px; height: 250px;'>
                <table>
                    <tr>Résumé section</tr>
                </table>
                </div>
                <input type="submit" name="modifier" value="Modifier prof">
                <div class="tableau" style='overflow:scroll; border:#000000 1px solid; width:400px; height: 250px;'>
                <table>
                    <tr>Exercice en rapport</tr>
                </table>
                </div>
            </div>
            <div class="bottom_right">
                <div class="chapter">
                    <a href="">Chapitre 1</a>
                    <a href="">Chapitre 2</a>
                    <a href="">Chapitre 3</a>
                </div>
                <div class="extra">
                    <table>
                        <tr>Ressources Additionnelles</tr>
                    </table>
                    <p>chat</p>
                </div>
            </div>
        </div>
    </div>
    </center>
    <?php 
        require('footer.html')
    ?>
</body>