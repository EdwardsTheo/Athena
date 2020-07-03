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
        <title>Ajouter Evaluation</title>
    </head>

    <body>
    <?php require('header.php');
    if($_SESSION['status'] == "professeur") {
        header("Location: index.php?action=home_add_evaluation.php");
        exit(); 
    }
    else { 
    ?>
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
        <div class="basic_box box">
            <h3 class="heading_red"> Evaluation de 
                <?php echo $data['name']?></h3>
            <p class="text"><?php echo $message; ?> </p>
            <form action="index.php?action=evaluation.php" class="form_mdp" method="POST">
                <?php 
                if($data['status'] == "progress") {
                    echo "<input type='submit' class='btn btn--green btn_section' value='blblb' id='btn' name='afficher'>
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
