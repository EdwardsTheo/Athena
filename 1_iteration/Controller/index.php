<?php 
$content_for_layout = '../Modele/afficher_cours.php';
    
    if(isset($_GET['action'])) {
            switch ($_GET['action']) {
                case 'add_class.php':
                    require('../View/add_class.php');
                break;

                case 'add_evaluation.php':
                    require('../View/add_evaluation.php');
                break;

                case 'add_exercice.php':
                    require('../View/add_exercice.php');
                break;

                case 'class.php':
                    require('../View/class.php');
                break;

                case 'evaluation.php':
                    require('../View/evaluation.php');
                break;

                case 'exercice.php':
                    require('../View/exercice.php');
                break;

                case 'home_class.php':
                    require('../View/home_class.php');
                break;

                case 'home_exercice.php':
                    require('../View/home_exercice.php');
                break;

                case 'home_prof.php':
                    require('../View/home_prof.php');
                break;

                case 'home_student.php':
                    require('../View/home_student.php');
                break;

                case 'visu_class.php':
                    require('../View/visu_class.php');
                break;

                case 'connecter.php':
                    require('../Modele/connecter.php');
                break;
            }
    }
    elseif (isset($_GET['afficher'])) {
        require('../View/home_class.php');
    }
    else {
        require('../View/connexion.php');
    }
?>