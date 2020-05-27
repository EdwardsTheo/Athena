<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Public/styles/heading.css">
        <link rel="stylesheet" href="Public/styles/box.css">
        <link rel="stylesheet" href="Public/styles/font.css">
        <link rel="stylesheet" href="Public/styles/button.css">
        <link rel="stylesheet" href="Public/styles/class.css">
        <title>Page de cours</title>
    </head>

    <body>
    <?php require("header.php"); ?>

        <section class="class">
            <div class="heading">    
                <p class="heading_primary heading_class">
                    <?php echo $_POST['nom_cours']; ?>
                </p>
            </div>
            <div class="main_class">
                <div class="basic_box box_class index">
                    <div class="head_btn">
                        <a href="index.php?action=home_class.php" class="btn-text_index">&larr; Retour au choix du cours</a>
                    </div>
                    <form action="index.php?action=class.php" class="form_index" method="POST">
<?php
$i = 0;
while($data = $request->fetch()) {
    $name_chap = $data['nom_chapitre'];
    $i++;
?>
<input type="submit" class="btn_index btn_class" name="Afficher_chap" value="<?php echo $name_chap ?>" id="btn">
<?php            
}
$request->closeCursor();
?>                      <input type="hidden" name="id_cours" value="<?php echo $_POST['id_cours']?>">
                        <input type="hidden" name="nom_cours" value="<?php echo $_POST['nom_cours']?>">
                    </form>
                    <div class="bottom_btn">
                        <input type="submit" class="btn_news" value="Modifier rubrique" id="btn">
                    </div>
                </div>
                <div class="basic_box box_class zone_class">
                    <div class="heading_zone">    
                        <p class="heading_zone_class">
                        <?php echo $_POST['Afficher_chap'];?>
                        </p>
                    </div>
                    <div class="text_class">
                        <p class="text">
                        -Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <p class="text">
                            -Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <p class="text">
                            -Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                    </div>
                    <div class="box_btn">
                        <form action="#" class="form_index">
                            <input type="submit" class="btn_news btn_text btn_prof" value="Modifier" id="btn">
                            <input type="submit" class="btn_news btn_text btn_prof" value="Correction &rarr;" id="btn">
                        </form>
                    </div>
                </div>
            </div>
        </section>

    <?php require("footer.php"); ?>
    </body>
</html>