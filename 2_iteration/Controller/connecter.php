<?php 

    session_start();
    require("Model/connexion_sql.php");
    if (isset($_POST["email"])) {
        $email = $_POST["email"];
        if (isset($_POST["password"])) {
            $password = $_POST["password"];
            $request = "SELECT * FROM users";
            $find = false;
            foreach ($bdd->query($request) as $row) {
                if ($row["email"] == $email){
                    if ($row["password"] == $password){
                        $find = true;
                        if ($row["status_user"] == "eleve"){
                            $_SESSION['email'] = $email;
                            $_SESSION['nom'] = $row["nom"];
                            $_SESSION['prenom'] =  $row["prenom"];
                            $_SESSION['status'] = "eleve";
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

?>