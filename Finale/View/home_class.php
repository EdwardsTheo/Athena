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
    <!--<link rel="stylesheet"  href="Public/styles/test.css">-->
</head>
<body>
<?php require('header.php') ?>

<section class="choose_sec">
        <div class="heading">
            <p class="heading_primary">
            INDEX DES RUBRIQUES
            </p>
            <?php 
                if($_SESSION['status'] != 'eleve'){ ?>
                        <form method = "POST" action="">
                            <select name='eleve'>
                            <?php 
                                while($data = $request5->fetch()){
                                    $nom = $data['nom'].' '.$data['prenom'];
                                    $id_eleve = $data['id_user'];
                                    echo '<option value='.$id_eleve.'>'.$nom.'</option>';
                                }
                            ?>
                            </select>
                            <input type="submit" value="validé">
                        </form>
            <?php 
                } 
                
            ?>
        </div>
        <div class="box_row">
<?php
while($data = $request->fetch()) {
    $name_ru = $data['nom_rubrique'];
    $id = $data['id_rubrique'];
    $svg = $data['svg'];
    $request4 = howProgressCours($id);
    $request2 = howMuchCours($id);
    $countExos =0;
    $progress_exo = 0;
    while($data2 = $request2->fetch()){
        $countExos = intval($data2[0]);
        
    }
    while($data3 = $request4->fetch()){
        $progress_exo = intval($data3[0]);
        
    }
    if($progress_exo != 0){
        $progress = round(($progress_exo*100)/$countExos);
    }else{
        $progress = 0;
    }
    
?>
    <div class="basic_box red_section">
        <svg class="box-nav_section">
            <use xlink:href="Public/svg/symbol-defs.svg#<?php echo $svg?>"></use>
        </svg>
        <h3 class="heading_red">
        <?php echo $name_ru ?></h3>
        <div class="progress-bar progress_exo">
        <?php
                echo '<span style="width:'.$progress.'%">';
                echo $progress.'%';
        ?>
            </span>
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
            COURS
            </p>
        </div>
    </section>

    </body>
</html>