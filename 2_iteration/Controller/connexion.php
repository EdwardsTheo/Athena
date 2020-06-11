<?php

require('Model/request.php');

function welcome() {
    require('View/connexion.php');
}

function startProf() {
    $request2 = getAnnonce();
    require('View/home_prof.php');
}

function startStudent() {
    $request_student = selectLast();
    $request = updatePasseWord();
    $request2 = getAnnonce();
    require('View/home_student.php');
}

function who() {
    if($_SESSION['status'] == 'eleve') return $string = 'index.php?action=home_student.php'; 
    else  return $string = "index.php?action=home_prof.php";
}

function connexion() {
    if (isset($_POST["email"])) {
        $email = $_POST["email"];
        if (isset($_POST["password"])) {
            $password = $_POST["password"];
           
            $find = false;
            $request = getUser();
            while ($row = $request->fetch()) {
                if ($row["email"] == $email){
                    if ($row["password"] == $password){
                        $find = true;
                        if ($row["status_user"] == "eleve"){
                            $_SESSION['email'] = $email;
                            $_SESSION['nom'] = $row["nom"];
                            $_SESSION['prenom'] =  $row["prenom"];
                            $_SESSION['status'] = "eleve";
                            $_SESSION['id_user'] = $row['id_user'];
                            header("Location: index.php?action=home_student.php");
                            exit();
                        }
                        else {
                            $_SESSION['email'] = $email;
                            $_SESSION['nom'] = $row["nom"];
                            $_SESSION['prenom'] =  $row["prenom"];
                            $_SESSION['status'] = "professeur";
                            
                            header("Location: index.php?action=home_prof.php");
                            exit();
                        }
                    }
                }
            }
            if ($find == false){
                header("Location: index.php?error=2");
            }
        }
        else {
            header("Location: index.php?error=1");
            exit();
        }
    }
    else {
        header("Location: index.php?error=1");
        exit();
    }
}

?>