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
require('Controller/add_eval_controller.php');

require_once("Model/request.php");
require_once("Model/insert.php");
require_once("Model/select.php");
require_once("Model/update.php");

// Main controller 

if(!isset($_GET['action'])) {
    welcome();
}

if(isset($_GET['action'])) {
    if($_GET['action'] == 'connecter.php') connexion();
    elseif($_GET['action'] == 'home_prof.php'){
        if(isset($_POST['mdp'])){
            startProf2();
        }
        if(isset($_POST['add'])){
            //var_dump(addnews());
            addnews();
        }
        if(isset($_POST['delete'])){
            delnews();
        }
        if(isset($_POST['nouvelle_news'])){
            endEditnews();
        }
        startProf();
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
        elseif(isset($_POST['Supprimer_chapter'])) {
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
    elseif($_GET['action'] == 'home_test.php') {
        startHomeEval();
    }
    elseif($_GET['action'] == 'test.php') {
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
    elseif($_GET['action'] == 'home_add_test.php') {
        startAddEval();
    }
    elseif($_GET['action'] == 'add_test.php') {
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
    }elseif($_GET['action'] == 'correct_exercice.php'){
        startCorrect();
    }
}
?>