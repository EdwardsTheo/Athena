<?php 

session_start();

require('Controller/connexion.php');
require('Controller/home_class_controller.php');
require('Controller/eval_controller.php');
require('Controller/add_class_controller.php');
require('Controller/class_controller.php');
require('Controller/home_exercice_controller.php');
require('Controller/visu_class_controller.php');
require('Controller/home_student_controller.php');
require('Controller/home_prof_controller.php');
require('Controller/chat_controller.php');
require('Controller/add_eval_controller.php');

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
        if(isset($_POST['mdp'])){
            startStudent2();
        }
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
        if(isset($_POST['deleteAll'])){
            deleteall();
        }
    }
    elseif($_GET['action'] == 'home_evaluation.php') {
        startHomeEval();
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
    elseif($_GET['action'] == 'home_add_evaluation.php') {
        startAddEval();
    }
    elseif($_GET['action'] == 'add_evaluation.php') {
        if(isset($_POST['addExoEval'])) {
            addExoEval();
        }
        elseif(isset($_POST['modifExoEval'])) {
            modifExoEval();
        }
        elseif(isset($_POST['suppExoEval'])) {
            suppExoEval();
        }
        elseif(isset($_POST['Valider_Eval'])) {
            validerEval();
        }
        startSecondEval();
    }
    elseif($_GET['action'] == 'add_exercice.php') {
        startAddExo();
    }
    elseif($_GET['action'] == 'exercice.php') {
       showExo();
    }
    elseif($_GET['action'] == 'chat.php') {
        startChat();
    }
?>