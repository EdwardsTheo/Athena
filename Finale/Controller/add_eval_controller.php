<?php

function startAddEval() {
    $request = reqPrintEval();
    require('View/home_add_evaluation.php');
}

function printStatus($status) {
    switch($status) {
        case 'null': return $string = "Créer une évaluation";
        break;
        case 'set' : return $string = "Modifiez l'évaluation";
        break;
        case 'progress' : return $string = "Attendez la fin de l'évaluation";
        break;
        case 'finish' : return $string = "Corrigez l'évalutation";
        break;

    }
}

function printForStudent($status, $hD, $hF, $date) {
    switch($status) {
        case 'null': return $string = "La date n'a pas encore été fixé";
        break;
        case 'set' : return $string = "set";
        break;
        case 'progress' : return $string = "L'évaluation est en cours";
        break;
        case 'finish' : return $string = "L'évaluation est terminée !";
        break;

    }
}

function startSecondEval() {
    if(isset($_POST['showExo'])) {
        $request_exo = reqShowExo(); 
        $requestCorr = requestCorr();
    }
    $request = reqExoEval();
    require('View/add_evaluation.php');
}

function GetIdStudent() {
    $request = getInfoStudent();
    while($data = $request->fetch()) {
        if($data['nom'] == $_POST['student']) {
            return $data['id_user'];
        }
    }
}

function addExoEval() {
    $req = reqAddExoEval();
    $req->execute(array(
        'id_evaluation' => $_POST['id_eval'],
        'nom_exo_eval' => $_POST['exoTitle'],
        'contenu_exo_eval' => $_POST['consigne']
    ));
    $req->closeCursor();
}

function hiddenEval() {
    ?>
    <input type="hidden" name="id_eval" value="<?php echo $_POST['id_eval']; ?>">
    <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
    <?php
}

function modifExoEval() {
    $req = reqModifExoEval();
    $req->execute(array(
        'nv_nom' => $_POST['exoTitle'],
        'nv_contenu' => $_POST['consigne']
    ));
    $req->closeCursor();
}

function suppExoEval() {
    $request = reqSuppExoEval();
}

function validerEval() {
    $sTime = $_POST['startTime']. ":00";
    $eTime = $_POST['endTime']. ":00";
    $req = reqModifEval();
    $req->execute(array(
        'nv_status' => 'set', 
        'hD' => $sTime, 
        'hF' => $eTime, 
        'setDate' => $_POST['date_start']
    ));
    $req->closeCursor();
}

function formStudent() {
    $request = getInfoStudent();
    echo "<select name='student' class='custom-select' size='1'>";
    while ($data = $request->fetch()){
        echo "<option class='option_class'>".$data['nom']."</option>";
    }
    echo "</select><br>";
}

function monthFrench($month) {
    switch($month) {
        case 'December' : return $string = 'Décembre';
        break;
        case 'January' : return $string = 'Janvier';
        break;
        case 'February' : return $string = 'Fevrier';
        break;
        case 'March' : return $string = 'Mars';
        break;
        case 'April' : return $string = 'Avril';
        break;
        case 'May' : return $string = 'Mai';
        break;
        case 'June' : return $string = 'Juin';
        break;
        case 'July' : return $string = 'Juillet';
        break;
        case 'August' : return $string = 'Aout';
        break;
        case 'September' : return $string = 'Septembre';
        break;
        case 'October' : return $string = 'Octobre';
        break;
        case 'November' : return $string = 'Novembre';
        break;
    }
}

function dayFrench($day) {
    switch($day) {
        case 'Sunday' : return $string = 'Dimanche';
        break;
        case 'Monday' : return $string = 'Lundi';
        break;
        case 'Tuesday' : return $string = 'Mardi';
        break;
        case 'Thursday' : return $string = 'Jeudi';
        break;
        case 'Wednesday' : return $string = 'Mercredi';
        break;
        case 'Friday' : return $string = 'Vendredi';
        break;
        case 'Saturday' : return $string = 'Samedi';
        break;
    }
}



?>