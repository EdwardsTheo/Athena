<?php 
    session_start();
    require("connexion_sql.php");
    if (isset($_POST["email"])) {
        $email = $_POST["email"];
        if (isset($_POST["password"])) {
            $password = $_POST["password"];
            $request = "SELECT email, password, status_user, nom, prenom FROM users";
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
                            header("Location: index.php?layout=home_student");
                            exit();
                        }
                        else {
                            $_SESSION['email'] = $email;
                            $_SESSION['nom'] = $row["nom"];
                            $_SESSION['prenom'] =  $row["prenom"];
                            $_SESSION['status'] = "professeur";
                            header("Location: index.php?layout=home_prof");
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