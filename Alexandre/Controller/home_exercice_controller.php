<?php

function startExo() {
    $request = getRub();
    if(isset($_POST['id_eleve'])){
        $request5 = getStudent2();
    }
    $request5 = getStudent();
    $request4 = countAll();
    $request2 = countExos();
    require('View/home_exercice.php');
}              
?>