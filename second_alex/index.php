<?php 

session_start();
require('Controller/connexion.php');
require('Controller/home_class_controller.php');
require('Controller/add_class_controller.php');
require('Controller/class_controller.php');
require('Controller/home_exercice_controller.php');
require('Controller/visu_class_controller.php');
require('Controller/home_student_controller.php');
require('Controller/home_prof_controller.php');

if(!isset($_GET['action'])) {
    welcome();
}

if(isset($_GET['action'])) {
    if($_GET['action'] == 'connecter.php') connexion();
    elseif($_GET['action'] == 'home_prof.php') {
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
    }
    
    elseif($_GET['action'] == 'home_class.php') {
        showClass();
        if (isset($_POST['afficher'])) {
            $answer = getClass();
            showSection($answer);
        }
        else require('View/footer.php');
        if(isset($_POST['SuppClass'])) {
            suppClass();
        }
        if(isset($_POST['NewClassName'])) {
            changeNameChap();
        }
    }
    elseif($_GET['action'] == 'home_exercice.php') {
        startExo();
    }
    elseif($_GET['action'] == 'class.php') {
        if(isset($_POST['Modifier_chap'])) {
            modifChapter();
        }
        elseif(isset($_POST['Read'])) {
            changeRead();
        }
        elseif(isset($_POST['Next'])) {
            nextChapter();
        }
        elseif(isset($_POST['Supprimer_Chapitre'])) {
            suppChap();
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
        if(isset($_POST['Add_new_class'])) {
            addNewClass();
        }
        if(isset($_POST['add_class_final'])) {
            addNewChapter();
        }
        startAddClass();
    }
    elseif($_GET['action'] == 'add_evaluation.php') {
        startAddEval();
    }
    elseif($_GET['action'] == 'add_exercice.php') {
        startAddExo();
    }
    elseif($_GET['action'] == 'exercice.php') {
       showExo();
    }
}

?>