<?php 
//just a test
session_start();

var_dump($_GET);

require('Controller/connexion.php');
require('Controller/home_class_controller.php');
require('Controller/home_student_controller.php');
require('Controller/home_exercice_controller.php');
require('Controller/class_controller.php');

if(!isset($_GET['action'])) {
    welcome();
}

if(isset($_GET['action'])) {
    if($_GET['action'] == 'connecter.php') connexion();
    elseif($_GET['action'] == 'home_prof.php') startProf();
    
    elseif($_GET['action'] == 'home_student.php') {
        startStudent();
    }
    
    elseif($_GET['action'] == 'home_class.php') {
        showClass();
        if (isset($_POST['afficher'])) {
            $answer = getClass();
            showSection($answer);
        }
        else require('View/footer.php');
    }
    elseif($_GET['action'] == 'home_exercice.php') {
        startExo();
    }
    elseif($_GET['action'] == 'class.php') {
        if(isset($_POST['Modifier_chap'])) {
            modifChapter();
        }
        if(isset($_POST['Read'])) {
            changeRead();
        }
        if(isset($_POST['Next'])) {
            nextChapter();
        }
        showClasses();
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