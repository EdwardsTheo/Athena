<?php 
    require_once("Model/request.php");

    /*–––––––––––––––––––––––––––Verifie si un exercice suivant existe––––––––––––––––––––––––––––––––––––––––––*/
    $id_ru = intval($_POST["id_rub"]);
    $index = intval($_POST["index"])+1;
    $index_ex = intval($_POST["index"]);
    $type_btn = verifyIssetExSup($index, $id_ru);
    if ($_POST["btn"] == "Afficher" || $_POST["btn"] == "Rediriger" ){
        $_GET["exercice"] = $_POST["index"];
    }
    elseif($_POST["btn"] == "Exercice suivant →"){
        $index2 = $index+1;
        $type_btn = verifyIssetExSup($index2, $id_ru);
        if($type_btn == "hidden"){
            verifyIssetExSupRub($id_ru);
        }
        $index_ex = $index;
    }
    
    $r_ou_e = "exercice";
/*–––––––––––––––––––––––––––––Affiche l'exercice sélectionné––––––––––––––––––––––––––––––––––––––––––––––––*/
    $request = getExWanted($id_ru);
    while($data = $request->fetch()) {
        $id_rubrics = $data["id_rubrics"];
        if ($index_ex == $data['index_exercice']){
            $name_ex = $data['name_exercice'];
            $id_ex = $data['id_exercice'];
            $instructions = $data["consigne_exercice"];
        } 
    }
    $request->closeCursor();
/*–––––––––––––––––––––––––––––Prends l'id des ressources associées––––––––––––––––––––––––––––––––––––––––––*/
    $request = getIdResources($id_ex, $id_ru);
    $result = $request->fetchAll();
/*–––––––––––––––––––––––––––––Défini le statut du user––––––––––––––––––––––––––––––––––––––––––––––––––––––*/
    if($_SESSION["status"] == "student"){
        $request = getUser();
        while($data = $request->fetch()) {
            $email = $data['email'];
            if ($email == $_SESSION["email"]){
                $id_user = $data['id_user'];
            } 
        }
        $request->closeCursor();
        verifyStatusEx($id_user, $id_ex);
    }
?>
