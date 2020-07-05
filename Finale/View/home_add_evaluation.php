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
    <?php require('header.php'); ?>
    
        <div class="heading">    
            <p class="heading_primary heading_class">
                Page de gestion des Evaluations
            </p>
        </div>
        <section class="main_add_exo main_add_class">
        <?php
        while($data = $request->fetch()) {
            $message = printStatus($data['status']);
            ?>
            <div class="basic_box box box_eval_prof">
               <h3 class="heading_red"> Evaluation de 
                <?php echo $data['name']?></h3>
                <p class="text"><?php echo $message; ?> </p>
                <form action="index.php?action=add_evaluation.php" class="form_mdp" method="POST">
                    <?php 
                    if($message !== "Attendez la fin de l'évaluation") {
                    echo "<input type='submit' class='btn btn--green btn_section' value='Gérer' id='btn-eval' name='afficher'>
                        <input type='hidden' name='status' value='$data[status]'>
                        <input type='hidden' name='id_eval' value='$data[id_evaluation]'>
                        <input type='hidden' name='name' value='$data[name]'>
                        <input type='hidden' name='status' value='$data[status]'>";
                    }
                    ?>
                </form>
            </div>
            <?php
        }
        ?>
        </section>

    <?php require('footer.php'); //?>
    </body>
</html>
