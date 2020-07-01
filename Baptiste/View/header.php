<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Public/styles/header.css"/>
        <title>Header</title>
    </head>
    <body>
        <section class ="main">
        <header class="header">
            <form action="#" class="form">
                <a href="index.php?action=home_class.php" class="btn-text">Cours </a>
                <a href="index.php?action=home_exercice.php" class="btn-text">Exercices </a>
                <?php require('Controller/header_controller.php');?>
                <a href="index.php?action=home_evaluation.php" class="btn-text">Evaluation </a>
            </form>
        </header>
    </section>
    </body>
</html>