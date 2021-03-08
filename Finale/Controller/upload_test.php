<?php
session_start();
header('Content-Type: application/json');

$uploaded = array();
if(!empty($_FILES['file']['name'][0])){
    foreach($_FILES['file']['name'] as $position => $name){
        $name = $_SESSION['name'];
        $ex = $_SESSION['ex'];
        $file = $name.'_'.$ex.'_'.$name;
        if (move_uploaded_file($_FILES['file']['tmp_name'][$position], '../Public/upload/eval/' . $file)) {
            $uploaded[] = array(
                "name" => $file,
                "file" => '../Public/upload/eval/' . $file
            );
        }
    }
}
echo json_encode($uploaded);