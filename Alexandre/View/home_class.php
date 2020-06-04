<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page des chapitres</title>
    <link rel="stylesheet"  href="Public/styles/home_exercice.css">
    <link rel="stylesheet"  href="Public/styles/header.css">
    <link rel="stylesheet"  href="Public/styles/heading.css">
    <link rel="stylesheet"  href="Public/styles/box.css">
    <link rel="stylesheet"  href="Public/styles/progress_bar.css">
    <link rel="stylesheet"  href="Public/styles/button.css">
    <link rel="stylesheet"  href="Public/styles/font.css">
    <link rel="stylesheet"  href="Public/styles/test.css">
</head>
<body>
<?php require('header.php') ?>

<section class="choose_sec">
        <div class="heading">
            <p class="heading_primary">
            INDEX DES RUBRIQUES
            </p>
        </div>
        <div class="box_row">
<?php
while($data = $request->fetch()) {
    $name_ru = $data['nom_rubrique'];
    $id = $data['id_rubrique'];
    $svg = $data['svg'];
?>
    <div class="basic_box red_section">
        <svg class="box-nav_section">
            <use xlink:href="Public/svg/symbol-defs.svg#<?php echo $svg?>"></use>
        </svg>
        <h3 class="heading_red">
        <?php echo $name_ru ?></h3>
        <div class="progress-bar progress_exo">
            <span style="width: 15%">15%</span>
        </div>
        <form action="index.php?action=home_class.php" class="form_mdp" method="GET">
            <input type="submit" class="btn btn--green btn_section " value="Afficher" id="btn" name='afficher'><br/>
            <input type="hidden"  id="btn" name="SVG" value="Public/svg/symbol-defs.svg#<?php echo $svg?>"><br/>
            <input type="hidden"  id="btn" name="rubrique" value="<?php echo $id?>"><br/>
            <input type="hidden"  id="btn" name="action" value="home_class.php"><br/>
        </form>
    </div>
<?php            
}
$request->closeCursor();
?>   
            
        </div>
    </section>
    
    <section class="choose_exo">
        <div class="heading">
            <p class="heading_primary">
            RUBRIQUES
            </p>
        </div>
    </section>

    </body>
</html>