<?php 
    if($_SESSION['status'] == "professeur") {
        header("Location: index.php?action=home_add_evaluation.php");
        exit(); 
    }
    else { 
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Public/styles/button.css">
        <link rel="stylesheet" href="Public/styles/add_evaluation.css"/>
        <link rel="stylesheet" href="Public/styles/add_exercice.css">
        <link rel="stylesheet" href="Public/styles/add_class.css"> 
        <link rel="stylesheet" href="Public/styles/box.css"> 
        <link rel="stylesheet" href="Public/styles/heading.css"> 
        <link rel="stylesheet" href="Public/styles/home_student.css">
        <link rel="stylesheet" href="Public/styles/exercice.css">
        <title>Home Evaluation</title>
    </head>

    <body>
    <?php require('header.php');?>
    <div class="heading">    
        <p class="heading_primary heading_class">
            Choisir l'évaluation
        </p>
    </div>
    <section class="main_add_exo main_add_class">
    <?php
        while($data = $request->fetch()) {
            if($data['status'] !== 'null') {
                $test = showDate($data['id_evaluation']);
                if($test == true) {
                    $test1 = showTime($data['id_evaluation']);
                    $end = ending($data['id_evaluation']);
                    if($test1 == true) {
                        modifProgress('progress', $data['id_evaluation']);
                        $data['status'] = 'progress';
                    }
                    if($end == true) {
                        modifProgress('finish', $data['id_evaluation']);
                        $data['status'] = 'finish';
                    }
                }
            }
            $message = printForStudent($data['status'], $data['heure_debut'] , $data['heure_fin'], $data['date']);
            ?>
        <div class="basic_box box red_section">
            <h3 class="heading_red"> Evaluation de 
                <?php echo $data['name']?></h3>
                <?php
                if($message == "set") {
                    $date = substr($data['date'], 5, 9);
                    $month = substr($date, 0, 2);
                    $dayNumb = substr($date, 3, 6);
                    $day = date('l', strtotime($data['date']));
                    $realDay = dayFrench($day);
                    $monthNum  = $month;
                    $dateObj   = DateTime::createFromFormat('!m', $monthNum);
                    $monthName = $dateObj->format('F');
                    $month = monthFrench($monthName);
                    ?>
                    <div class="box_info label_profil">
                    <label class="profil_titre" for="Jour">L'évaluation se déroulera le : </label>
                        <label class="profil_titre" for="Jour"> Jour : <?php echo $realDay . " " . $dayNumb; ?> </label>
                        <label class="profil_titre" for="Mois"> Mois : <?php echo $month; ?></label>
                        <label class="profil_titre" for="Mois"> Heure : <?php echo $data['heure_debut']; ?></label>
                    </div>
                    <?php
                }
                else {
                    echo "<p class='text'>$message</p>";
                }
                ?>
            <form action="index.php?action=evaluation.php" class="form_mdp" method="POST">
                <?php 
                if($data['status'] == "progress") {
                    echo "<input type='submit' class='btn btn--green btn_section' value='Accèder' id='btn-eval' name='afficher'>
                    <input type='hidden' name='status' value='$data[status]'>
                    <input type='hidden' name='id_eval' value='$data[id_evaluation]'>
                    <input type='hidden' name='name' value='$data[name]'>";
                }

               
                ?>
            </form>
        </div>
        <?php
    }
    }
    ?>
    </section>

    <?php require('footer.php'); //?>
    </body>
</html>
