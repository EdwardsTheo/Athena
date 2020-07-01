<?php
        require_once("Model/request.php");
        $id = $_POST["id_ex"];
        deleteLiens($id);
        deleteEx($id);
        header("Location: index.php?action=home_exercice.php");
        exit();
?>