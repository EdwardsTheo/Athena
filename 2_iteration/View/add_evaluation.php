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
    <?php
    if($_POST['status'] == 'finish') {
        require('evaluation_correct.php');
    }
    else {
        require('evaluation_create.php');
    }
    ?> 
    <?php require('footer.php'); //?>
    </body>
</html>
