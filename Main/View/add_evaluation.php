<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Public/styles/button.css">
        <link rel="stylesheet" href="Public/styles/add_test.css"/>
        <link rel="stylesheet" href="Public/styles/add_exercice.css">
        <link rel="stylesheet" href="Public/styles/add_class.css"> 
        <link rel="stylesheet" href="Public/styles/box.css"> 
        <link rel="stylesheet" href="Public/styles/heading.css"> 
        <link rel="stylesheet" href="Public/styles/home_student.css">
        <link rel="stylesheet" href="Public/styles/exercice.css">
        <title>Ajouter test</title>
    </head>

    <body>
    <?php require('header.php'); ?>
    <?php
    if(isset($_POST['status'])) {
        if($_POST['status'] == 'finish') require('test_correct.php');
        else  require('test_create.php');
        
    }
    else  require('test_create.php');
    ?> 
    <?php require('footer.php'); //?>
    </body>
</html>
