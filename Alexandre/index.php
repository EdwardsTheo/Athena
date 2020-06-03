<?php 

session_start();
require('Controller/connexion.php');
require('Controller/home_class_controller.php');
require('Controller/home_exercice_controller.php');
require('Controller/visu_class_controller.php');
require('Controller/home_student_controller.php');
require('Controller/home_prof_controller.php');

if(!isset($_GET['action'])) {
    welcome();
}

if(isset($_GET['action'])) {
    if($_GET['action'] == 'connecter.php'){
        connexion();
    }
    elseif($_GET['action'] == 'home_prof.php'){
        startProf();
        if(isset($_POST['mdp'])){
            startProf2();
        }
        if(isset($_POST['annonce'])){
            addAnnonce();
        }
        if(isset($_POST['delete'])){
            delAnnonce();
        }
    }
    
    elseif($_GET['action'] == 'home_student.php') {
        startStudent();
        if(isset($_POST['mdp'])){
            startStudent2();
        }
        
    }
    elseif($_GET['action'] == 'home_class.php') {
        showClass();
        if (isset($_GET['afficher'])) {
            $answer = getClass();
            showSection($answer);
        }
        else require('View/footer.php');
    }
    elseif($_GET['action'] == 'home_exercice.php') {
        startExo();
    }
    elseif($_GET['action'] == 'visu_class.php') {
        startVisu();
    }
    elseif($_GET['action'] == 'evaluation.php') {
        startEval();
    }
    elseif($_GET['action'] == 'add_class.php') {
        startAddClass();
    }
    elseif($_GET['action'] == 'add_evaluation.php') {
        startAddEval();
    }
    elseif($_GET['action'] == 'add_exercice.php') {
        startAddExo();
    }
}

?>