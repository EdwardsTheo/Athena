<?php 
//------------ Chapitre 1 ------------------
        while($data3 = $request3->fetch()){
            $valide_chap1 = $data3;
            $valide_chap1 = intval($valide_chap1[0]);
        }
        $request3->closeCursor();
    
        // récupère le nombre d'exercice en progression
    
        while($data4 = $request4->fetch()){
            $in_progress_chap1 = $data4;
            $in_progress_chap1 = intval($in_progress_chap1[0]);
        }
        $request4->closeCursor();
    
        // récupère le nombre d'exercice rendu
    
        while($data5 = $request5->fetch()){
            $returned_chap1 = $data5;
            $returned_chap1 = intval($returned_chap1[0]);
        
        }
        $request5->closeCursor();

//------------ Chapitre 2 ------------------

while($data6 = $request6->fetch()){
    $valide_chap2 = $data6;
    $valide_chap2 = intval($valide_chap2[0]);
}
$request6->closeCursor();

// récupère le nombre d'exercice en progression

while($data7 = $request7->fetch()){
    $in_progress_chap2 = $data7;
    $in_progress_chap2 = intval($in_progress_chap2[0]);
}
$request7->closeCursor();

// récupère le nombre d'exercice rendu

while($data8 = $request8->fetch()){
    $returned_chap2 = $data8;
    $returned_chap2 = intval($returned_chap2[0]);

}
$request8->closeCursor();

//------------ Chapitre 3 ------------------

while($data9 = $request9->fetch()){
    $valide_chap3 = $data9;
    $valide_chap3 = intval($valide_chap3[0]);
}
$request9->closeCursor();

// récupère le nombre d'exercice en progression

while($data10 = $request10->fetch()){
    $in_progress_chap3 = $data10;
    $in_progress_chap3 = intval($in_progress_chap3[0]);
}
$request10->closeCursor();

// récupère le nombre d'exercice rendu

while($data11 = $request11->fetch()){
    $returned_chap3 = $data11;
    $returned_chap3 = intval($returned_chap3[0]);

}
$request11->closeCursor();


//------------ Chapitre 4------------------


while($data12 = $request12->fetch()){
    $valide_chap4 = $data12;
    $valide_chap4 = intval($valide_chap4[0]);
}
$request12->closeCursor();

// récupère le nombre d'exercice en progression

while($data13 = $request13->fetch()){
    $in_progress_chap4 = $data13;
    $in_progress_chap4 = intval($in_progress_chap4[0]);
}
$request13->closeCursor();

// récupère le nombre d'exercice rendu

while($data14 = $request14->fetch()){
    $returned_chap4 = $data14;
    $returned_chap4 = intval($returned_chap4[0]);

}
$request14->closeCursor();


//------------ Chapitre 5 ------------------

while($data15 = $request15->fetch()){
    $valide_chap5 = $data15;
    $valide_chap5 = intval($valide_chap5[0]);
}
$request15->closeCursor();

// récupère le nombre d'exercice en progression

while($data16 = $request16->fetch()){
    $in_progress_chap5 = $data16;
    $in_progress_chap5 = intval($in_progress_chap5[0]);
}
$request16->closeCursor();

// récupère le nombre d'exercice rendu

while($data17 = $request17->fetch()){
    $returned_chap5 = $data17;
    $returned_chap5 = intval($returned_chap5[0]);

}
$request17->closeCursor();

?>