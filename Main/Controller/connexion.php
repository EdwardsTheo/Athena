<?php

require('Model/request.php');

function welcome() {
    require('View/connexion.php');
}

function startProf() {
    $request2 = getnews();
    require('View/home_prof.php');
}

function startStudent() {
    $request = updatePasseWord();
    $request2 = getnews();
    $request3 = countclass();
    $request4 = countAll();
    $request5 = countAllExos();

    $request6 = firstCo();
    while($data6 = $request6->fetch()){
        if(intval($data6[0]) == 0){
            insertFirstCo();
        }
    }
    require('View/home_student.php');
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
                            $_SESSION['name'] = $row["name"];
                            $_SESSION['firstname'] =  $row["firstname"];
                            $_SESSION['status'] = "student";
                            $_SESSION['id_user'] = $row["id_user"];
                            updateHour();
                            header("Location: index.php?action=home_student.php");
                            exit();
                        }
                        else {
                            $_SESSION['email'] = $email;
                            $_SESSION['name'] = $row["name"];
                            $_SESSION['firstname'] =  $row["firstname"];
                            $_SESSION['status'] = "teacher";
                            $_SESSION['id_user'] = $row["id_user"];
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