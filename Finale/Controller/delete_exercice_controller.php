<?php
        require_once("Model/request.php");
        $id = $_POST["id_ex"];
        deletelinks($id);
        deleteEx($id);
        header("Location: index.php?action=home_exercice.php");
        exit();
?>