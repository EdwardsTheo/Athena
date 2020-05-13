<?php 
    if(isset($_GET['action'])){
        switch($_GET['action']){
            case 'class.php':
                require('../../Baptise/View/class.php');
            break;

            case 'home_class.php':
                require('../../Baptiste/View/home_class.php');
            break;

            case 'afficher_cours.php':
                require('../../Baptiste/View/home_class.php');
            break;

            case 'add_evaluation.php':
                require('../../Baptiste/View/add_evaluation.php');
            break;
    
        }
    }else {
        require('../../Baptiste/View/home_class.php');
    }
        /*
    require ('../View/exercice.php');
    require ('../View/home_class.php');
    require ('../View/home_exercice.php');
    require ('../View/visu_class.php');
    */
?>