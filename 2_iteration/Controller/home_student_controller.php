<?php

function lastClass() {
    $test = false;
    $test1 = false;
    $id_rubrique = 1;
    while($test == false) {
        $request = checkReadRubrique($id_rubrique);
        if($request == null) {
            $test = true;
            $p_id_cours = 0;
            break;
            
        }
        while($data = $request->fetch()) {
            $status = $data['status_cours'];
            $p_id_cours = $data['id_cours'];
            if($status == 'non_lu') {
                $test1 = true;
                break;
            }
        }
        if($test1 == true) break;
        else $id_rubrique++;
    }
    return $p_id_cours;
}
lastClass();

function selectLast() {
    $id_cours = lastClass();
    $request = getLastClass($id_cours);
    return $request;
}

?>