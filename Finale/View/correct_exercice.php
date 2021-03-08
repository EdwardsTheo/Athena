<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercices</title>
        <link rel="stylesheet" href="Public/styles/home_prof.css">
        <link rel="stylesheet" href="Public/styles/home_student.css">
        <link rel="stylesheet" href="Public/styles/class.css">
        <link rel="stylesheet"  href="Public/styles/exercice.css">
        <link rel="stylesheet"  href="Public/styles/heading.css">
        <link rel="stylesheet"  href="Public/styles/button.css">
        <link rel="stylesheet"  href="Public/styles/font.css">
        <link rel="stylesheet"  href="Public/styles/box.css">
    </head>

    <body>
    <?php 
        require('header.php') ;
    ?>
    <!--Affiche le name de l'exercice-->
        <section class="class">
            <div class="heading">    
                <p class="heading_primary heading_class" id="name_ex">
                    <?php echo $name_ex; 
                    $_SESSION['ex'] = $name_ex;
                    ?>
                </p>
            </div>
            <div class="box_class basic_box zone_class">
                <div class="heading_zone">    
                    <p class="heading_zone_class">
                        Consigne de l'exercice
                    </p>
                </div>
                
                <div class="text_class">
                    <p class="text">
                        <?php echo $instructions ?>
                    </p>
                </div>
            </div>
        </section>
        <section class='bottom_exercice'>
        <?php 
            $id_ex = $_POST['id_ex'];
            $request2 = correctExos($id_ex);
            while($data2 = $request2->fetch()){
                $contents = $data2["contents_return"];
            }
            if($_SESSION["status"] == "student"){
                $user = $_SESSION["name"];
            }
            else{
                $request3 = getUser();
                while($data3 = $request3->fetch()){
                    $id_user = $data3['id_user'];
                    if($id_user == $id_student){
                        $user = $data3["name"];
                    }
                }
            }
            $ex = $name_ex;
            $direct = "Public/upload/exercices/";
            $d = dir("Public/upload/exercices/");
            $test = $user."_".$ex;
            while($entry = $d->read()) { 
                preg_match("($test?)", $entry, $new);
                $data = trim($new[0]);
                if (!empty($data)) {
                    if($entry == $contents){
                        $file = $contents;
                            
                    }
                }
            } 
                $src = "Public/upload/exercices/".$file;
    echo "
    <iframe
        id='test'
        height = 500px
        src='$src'>
    </iframe>";
    ?>
    <form action="index.php?action=home_exercice.php" method="POST">
        <input type="submit" class="btn btn--green btn_section" id="btn" name="btn" value="Cet exercice est valide">
        <input type="hidden" name="id_ex" value="<?php echo $id_ex?>">
        <input type="hidden" name="id_student" value="<?php echo $id_student?>">
    </form>
    <form action="index.php?action=home_exercice.php" method="POST">
        <input type="submit" class="btn btn--green btn_section" id="btn" name="btn" value="Cet exercice n est pas valide">
        <input type="hidden" name="id_ex" value="<?php echo $id_ex?>">
        <input type="hidden" name="id_student" value="<?php echo $id_student?>">
    </form>
    </section>
    <?php require('footer.php') ?>
    </body>
</html>