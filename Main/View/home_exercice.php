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
        <link rel="stylesheet" href="Public/styles/add_test.css">
        <title>Home Exercice</title>

    </head>
    <body>
    <?php require('header.php') ?>
    
    <section class="choose_sec">
        <div class="heading heading_main_class">
            <p class="heading_primary">
            INDEX DES EXERCICES
            </p>
            <?php if($_SESSION['status'] != 'student'){ ?>
                        <form method = "POST" action="" class="form_index form_choose">
                            <select name='student' class="custom-select">
                            <?php 
                                $request5 = getStudent();
                                while($data = $request5->fetch()){
                                    $name = $data['name'].' '.$data['firstname'];
                                    $id_student = $data['id_user'];
                                    if(isset($_POST['id_student']) AND isset($_POST['Profil'])){
                                        echo '<option selected="selected"  value="'.$_POST['id_student'].'">'.$_POST['Profil'].'</option>';
                                    }
                                        echo '<option  value="'.$id_student.'">'.$name.'</option>';
                                }
                            ?>
                            </select>
                            <input type="submit" class="btn_news btn-space" value="Voir les progrès de l élève">
                            <br/>
                        </form>
                 <?php 
                 } 
                 
                 ?>
        </div>

        <div class="box_row">
        <?php 
            $request= getRub(); 
            while($data = $request->fetch()) {
                $name_ru = $data['name_rubric'];
                $id_ru = $data['id_rubrics'];
                $svg = $data['svg'];
                $request4 = howProgressExos($id_ru);
                $request2 = howMuchExos($id_ru);
                $countExos = 0;
                $progress_exo = 0;
                while($data2 = $request2->fetch()){
                    $countExos = intval($data2[0]);
                }
                while($data3 = $request4->fetch()){
                    $progress_exo = intval($data3[0]);
                }
                if($progress_exo != 0){
                    $progress = round($progress_exo*100/$countExos);
                }else{
                    $progress = 0;
                }
        ?>
            <div class="basic_box red_section">
                <svg class="box-nav_section">
                    <use xlink:href="Public/svg/symbol-defs.svg#<?php echo $svg?>"></use>
                </svg>
                <h3 class="heading_red">
                <?php echo $name_ru; ?>
                </h3>
                <div class="progress-bar progress_exo">
                <?php echo '<span style="width:'.$progress.'%">';
                    echo $progress.'%';
                ?>
                </div>
                <form action="index.php?action=home_exercice.php" class="form_mdp" method="POST">
                    <input type="submit" class="btn btn--green btn_section " value="Afficher" id="btn" name='afficher'><br/>
                    <input type="hidden"  id="btn" name="SVG" value="Public/svg/symbol-defs.svg#<?php echo $svg?>"><br/>
                    <input type="hidden"  id="btn" name="rubric" value="<?php echo $id_ru?>"><br/>
                    <input type="hidden"  id="btn" name="rubric_n" value="<?php echo $name_ru?>">
                    <?php 
                        if(isset($_POST['student'])&& !empty($_POST['student'])){
                            $id_student=$_POST['student'];
                            echo "<input type='hidden' name='id_student' value='$id_student'>";
                        }
                    ?>
                </form>
            </div>
            <?php
                $request2->closeCursor();
                $request4->closeCursor();         
                }
                $request->closeCursor();
            ?>   
            
        </div>
    </section>
    <?php 
    if (isset($_POST["rubric"])){
        $svg = $_POST["SVG"];
        $_GET["rubric"] = $_POST["rubric"];
        $id_rub = $_GET["rubric"];
        $name_ru = $_POST["rubric_n"];
    ?>
    <section class="choose_exo">
        <div class="heading">
            <p class="heading_primary">
            Exercice
            </p>
        </div>

        <div class="box_row">
            <?php 
                $r_ou_e = "rubric";

                $request = getExWanted($id_rub); 
                
                while($data = $request->fetch()) {
                    $trouve1 = false;
                    $trouve2 = false;
                    $trouve3 = false;

                    $name_ex = $data['name_exercice'];
                    $id = $data['id_exercice'];
                    $index_ex = $data['index_exercice'];
                    if($index_ex%4 == 0) {
                        echo "</div>";
                        echo "<div class='box_row'>";
                    }
                    if ($_SESSION["status"] == 'student'){
                        $id_user = $_SESSION["id_user"];
                    }
                    else{
                        $id_user = $_POST['id_student'];
                    }
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
                                        $answer3->closeCursor();
                                    }
                                }
                                $answer2->closeCursor(); 
                            }  
                        }$answer->closeCursor();
                        
                
            
                    
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
                            echo "Exercice return";
                        }
                        elseif($trouve3 == true){
                            echo "Exercice valide";
                        }
                        elseif($trouve1 == true){
                            echo "Exercice en class";
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
                    <input type="hidden"  id="btn" name="rubric_n" value="<?php echo $name_ru?>"><br/>
                    <input type="hidden"  id="btn" name="exercice" value="<?php echo $id?>"><br/>
                    <input type="hidden"  id="btn" name="id_rub" value="<?php echo $id_rub?>"><br/>
                    <input type="hidden"  id="btn" name="index" value="<?php echo $index_ex?>"><br/>
                    <?php 
                        if(isset($_POST['id_student'])&& !empty($_POST['id_student'])){
                            echo "<input type='hidden' name='id_student' value='$id_user'>";
                        }
                    ?>

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