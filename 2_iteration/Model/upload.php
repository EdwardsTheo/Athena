<?php
session_start();
require("request.php");
//header('Content-Type: application/json');

$uploaded = array();

if(!empty($_FILES['file']['name'][0])){
    foreach($_FILES['file']['name'] as $position => $name){
        if (move_uploaded_file($_FILES['file']['tmp_name'][$position], 'upload/' . $name)) {
            $file = file_get_contents('upload/'.$name);
            $request = fileToBddEleve($file);
            $uploaded[] = array(
                "name" => $name,
                "file" => 'Model/upload/' . $name
            );
        }
    }
}
//echo json_encode($uploaded);
