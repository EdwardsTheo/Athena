<?php
session_start();
header('Content-Type: application/json');

$uploaded = array();
if(!empty($_FILES['file']['name'][0])){
    foreach($_FILES['file']['name'] as $position => $name){
        $nom = $_SESSION['nom'];
        $ex = $_SESSION['ex'];
        $file = $nom.'_'.$ex.'_'.$name;
        if (move_uploaded_file($_FILES['file']['tmp_name'][$position], '../Public/upload/' . $file)) {
            $uploaded[] = array(
                "name" => $file,
                "file" => '../Public/upload/' . $file
            );
        }
    }
}
echo json_encode($uploaded);
