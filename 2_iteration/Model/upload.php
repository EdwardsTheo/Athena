<?php
session_start();
header('Content-Type: application/json');

$uploaded = array();
if(!empty($_FILES['file']['name'][0])){
    foreach($_FILES['file']['name'] as $position => $name){
        if (move_uploaded_file($_FILES['file']['tmp_name'][$position], 'upload/' . $name)) {
            $nom = $_SESSION['nom'];
            $ex = $_SESSION['ex'];
            $file = $name.'_'.$nom.'_'.$ex;
            $uploaded[] = array(
                "name" => $file,
                "file" => 'Model/upload/' . $name
            );
        }
    }
}
echo json_encode($uploaded);
