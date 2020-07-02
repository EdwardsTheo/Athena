<?php

function startExo() {
    $request = getRub();
    $request5 = getStudent();
    $request4 = countAll();
    $request2 = countExos();
    require('View/home_exercice.php');
}              
?>