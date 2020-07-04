<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Public/styles/home_prof.css">
        <link rel="stylesheet" href="Public/styles/home_exercice.css">
        <link rel="stylesheet" href="Public/styles/progress_bar.css">
        <link rel="stylesheet" href="Public/styles/box.css">
        <link rel="stylesheet" href="Public/styles/font.css">
        <link rel="stylesheet" href="Public/styles/button.css">
        <link rel="stylesheet" href="Public/styles/heading.css">
        <title>Home Exercice</title>

    </head>
    <body>
    <?php require('header.php') ?>
    
    <section class="choose_sec">
        <div class="heading">
            <p class="heading_primary">
            INDEX DES EXERCICES
            </p>
        </div>

        <div class="box_row">
        <?php 
            $request= getRub(); 
            while($data = $request->fetch()) {
                $name_ru = $data['nom_rubrique'];
                $id_ru = $data['id_rubrique'];
                $svg = $data['svg'];
            
        ?>
            <div class="basic_box box red_section">
                <svg class="box-nav_section">
                    <use xlink:href="Public/svg/symbol-defs.svg#<?php echo $svg?>"></use>
                </svg>
                <h3 class="heading_red">
                <?php echo $name_ru; ?>
                </h3>
                <div class="progress-bar progress_exo">
                    <span style="width: 15%">15%</span>
                </div>
                <form action="index.php?action=home_exercice.php" class="form_mdp" method="POST">
                    <input type="submit" class="btn btn--green btn_section " value="Afficher" id="btn" name='afficher'><br/>
                    <input type="hidden"  id="btn" name="SVG" value="Public/svg/symbol-defs.svg#<?php echo $svg?>"><br/>
                    <input type="hidden"  id="btn" name="rubrique" value="<?php echo $id_ru?>"><br/>
                    <input type="hidden"  id="btn" name="rubrique_n" value="<?php echo $name_ru?>">
                </form>
            </div>
            <?php            
                }
                $request->closeCursor();
            ?>   
            
        </div>
    </section>
    <?php 
    if (isset($_POST["rubrique"])){
        $svg = $_POST["SVG"];
        $_GET["rubrique"] = $_POST["rubrique"];
        $id_rub = $_GET["rubrique"];
        $name_ru = $_POST["rubrique_n"];
    ?>
    <section class="choose_exo">
        <div class="heading">
            <p class="heading_primary">
            Exercice
            </p>
        </div>

        <div class="box_row">
            <?php 
                $r_ou_e = "rubrique";

                $request = getExWanted($id_rub); 
                
                while($data = $request->fetch()) {
                    $trouve1 = false;
                    $trouve2 = false;
                    $trouve3 = false;

                    $name_ex = $data['nom_exercice'];
                    $id = $data['id_exercice'];
                    $index_ex = $data['index_exercice'];
                    if($index_ex%4 == 0) {
                        echo "</div>";
                        echo "<div class='box_row'>";
                    }
                    $id_user = $_SESSION["id_user"];
                    $answer = verify1($id_user);
                    while($datas = $answer->fetch()){

                        $exe = intval($datas["id_exercice"]);

                        if($id == $exe){

                            $trouve1 = true;
                        }else{
                            $answer2 = verify2($id_user);
                            while($datas2 = $answer2->fetch()){
                                $exe2 = intval($datas2["id_exercice"]);
                                if($id == $exe2){
                                    $trouve2 = true;
                                }else{
                                    $answer3 = verify3($id_user);
                                    while($datas3 = $answer3->fetch()){
                                        $exe3 = intval($datas3["id_exercice"]);
                                        if($id == $exe3){
                                            $trouve3 = true;
                                        }
                                    }
                                }
                            } 
                        }  
                    }
                    $answer->closeCursor();
                    
            ?>
            <div class="basic_box red_section red_exo">
                <svg class="box-nav_exo">
                    <use xlink:href="<?php echo $svg?>"></use>
                </svg>
                <h3 class="heading_red heading_exo">
                <?php echo $name_ex?>
                </h3>
                <div class="status">
                    <p class="message">
                    <?php
                        if($trouve2 == true){
                            echo "Exercice rendu";
                        }
                        elseif($trouve3 == true){
                            echo "Exercice valide";
                        }
                        elseif($trouve1 == true){
                            echo "Exercice en cours";
                        }
                        else{
                            echo "Exercice non lu";
                        }
                    ?>
                    </p>
                    <?php 
                    if($trouve2 == true || $trouve3 == true){
                        echo "<svg class='box-nav_exo'>
                            <use xlink:href='Public/svg/symbol-defs.svg#icon-check'></use>
                        </svg>";
                    };
                    ?>
                </div>  
                <form action="index.php?action=exercice.php" class="form_mdp" method="POST">
                    <input type="submit" name="btn" class="btn btn--green btn_section " value="Afficher" id="btn">
                    <input type="hidden"  id="btn" name="rubrique_n" value="<?php echo $name_ru?>"><br/>
                    <input type="hidden"  id="btn" name="exercice" value="<?php echo $id?>"><br/>
                    <input type="hidden"  id="btn" name="id_rub" value="<?php echo $id_rub?>"><br/>
                    <input type="hidden"  id="btn" name="index" value="<?php echo $index_ex?>"><br/>
                </form>
            </div>
    
            
            <?php
                }
                $request->closeCursor();
            ?>   
        </div>
    </section>
    <?php
        } 
        else{
            echo "";
        }
    ?>

    <?php require('footer.php') ?>
</body>
</html>