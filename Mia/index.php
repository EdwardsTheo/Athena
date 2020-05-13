<?php
if(isset($_GET["layout"])){
    $layout = $_GET["layout"];
    switch ($layout) {
        case "home_prof" : require('View/home_prof.php');
        break;
        case "home_student" : require('View/home_student.php');
        break;
    }
}
else{
    if(isset($_GET["action"])){
        $action = $_GET["action"];
        switch ($action) {
            case "connecter" : require('Modele/connecter.php');
            break;
        }
    }
    else{
        require('View/connexion.php');
    }
}

?>