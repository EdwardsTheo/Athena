<?php 
    if($_SESSION['status'] == 'eleve'){
        echo '<a href="index.php?action=home_student.php" class="btn-text">Profil</a>';
    }
    elseif($_SESSION['status'] == "professeur"){
        echo '<a href="index.php?action=home_prof.php" class="btn-text">Profil</a>';
    }

    if(isset($_POST['deco'])){
        session_start();
        session_destroy();
        header('Location: ../index.php');
        exit;
    }
?>