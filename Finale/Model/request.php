<?php

//require("connexion_sql.php");

function getChapterClass() {
    $db = connect_start();
    
    $request = $db->query('SELECT c.chapter_name, c.id_rubrics, c.id_chapter
    FROM chapter AS c
    WHERE c.index_class = \''.htmlspecialchars($_POST['index_class']).'\'
    AND c.id_rubrics = \''.htmlspecialchars($_POST['id_rubrics']).'\'');
    return $request;
}

function getLastClass($id) {
    $db = connect_start();

    $request = $db->query('SELECT r.name_rubric, c.name_class, c.index_class, r.id_rubrics, c.id_class 
    FROM rubrics AS r
    LEFT JOIN class AS c
    ON c.id_rubrics = r.id_rubrics
    WHERE c.id_class = \''.$id.'\'');
    return $request;
}

function reqPrintEval() {
    $db = connect_start();
    $request = $db->query('SELECT * FROM test');

    return $request;
}

function reqExoEval() {
    $db = connect_start();
    $request = $db->query('SELECT * FROM exos_eval
    WHERE id_test = \''.$_POST['id_eval'].'\'');
    return $request;
}

function reqShowExo() {
    $db = connect_start();
    $request = $db->query('SELECT * FROM exos_eval
    WHERE id_exo_eval = \''.$_POST['id_exo'].'\'');
    return $request;
}

function requestCorr() {
    $db = connect_start();
    $id_student = GetIdStudent(); 
    $request = $db->query('SELECT *
    FROM return_eval 
    WHERE id_user = \''.$id_student.'\'
    AND id_exo_eval = \''.$_POST['id_exo'].'\'');
    return $request;
}

function getStudent() {
    $db = connect_start();
    $request = $db->query('SELECT name, firstname, heure_connexion, id_user FROM users WHERE status_user = "student"');

    return $request;
}
function getStudent2() {
    $db = connect_start();
    $request = $db->query('SELECT name, firstname, heure_connexion, id_user FROM users WHERE status_user = "student" AND WHERE id_user <> '.$_POST['id_student'].'');

    return $request;
}

function getValideExercice_chap1(){
    $db = connect_start();
    $id_student = $_GET['id_student'];
    $request3 = $db->query("SELECT COUNT(*) FROM `return_exo`
    LEFT JOIN exercices ON return_exo.id_exercice = exercices.id_exercice
    WHERE id_rubrics = 1
    AND id_user = $id_student
    AND progress_exo = 'valide'");

    return $request3;
}

function getInProgressExercice_chap1(){
    $db = connect_start();
    $id_student = $_GET['id_student'];
    $request4 = $db->query("SELECT COUNT(*) FROM `return_exo`
    LEFT JOIN exercices ON return_exo.id_exercice = exercices.id_exercice
    WHERE id_rubrics = 1
    AND id_user = $id_student
    AND progress_exo = 'en_class'");

    return $request4;
}

function getReturnedExercice_chap1(){
    $db = connect_start();
    $id_student = $_GET['id_student'];
    $request5 = $db->query("SELECT COUNT(*) FROM `return_exo`
    LEFT JOIN exercices ON return_exo.id_exercice = exercices.id_exercice
    WHERE id_rubrics = 1
    AND id_user = $id_student
    AND progress_exo = 'return'");

    return $request5;
}

function getValideExercice_chap2(){
    $db = connect_start();
    $id_student = $_GET['id_student'];
    $request6 = $db->query("SELECT COUNT(*) FROM `return_exo`
    LEFT JOIN exercices ON return_exo.id_exercice = exercices.id_exercice
    WHERE id_rubrics = 2
    AND id_user = $id_student
    AND progress_exo = 'valide'");

    return $request6;
}

function getInProgressExercice_chap2(){
    $db = connect_start();
    $id_student = $_GET['id_student'];
    $request7 = $db->query("SELECT COUNT(*) FROM `return_exo`
    LEFT JOIN exercices ON return_exo.id_exercice = exercices.id_exercice
    WHERE id_rubrics = 2
    AND id_user = $id_student
    AND progress_exo = 'en_class'");

    return $request7;
}

function getReturnedExercice_chap2(){
    $db = connect_start();
    $id_student = $_GET['id_student'];
    $request8 = $db->query("SELECT COUNT(*) FROM `return_exo`
    LEFT JOIN exercices ON return_exo.id_exercice = exercices.id_exercice
    WHERE id_rubrics = 2
    AND id_user = $id_student
    AND progress_exo = 'return'");

    return $request8;
}

function getValideExercice_chap3(){
    $db = connect_start();
    $id_student = $_GET['id_student'];
    $request9 = $db->query("SELECT COUNT(*) FROM `return_exo`
    LEFT JOIN exercices ON return_exo.id_exercice = exercices.id_exercice
    WHERE id_rubrics = 3
    AND id_user = $id_student
    AND progress_exo = 'valide'");

    return $request9;
}

function getInProgressExercice_chap3(){
    $db = connect_start();
    $id_student = $_GET['id_student'];
    $request10 = $db->query("SELECT COUNT(*) FROM `return_exo`
    LEFT JOIN exercices ON return_exo.id_exercice = exercices.id_exercice
    WHERE id_rubrics = 3
    AND id_user = $id_student
    AND progress_exo = 'en_class'");

    return $request10;
}

function getReturnedExercice_chap3(){
    $db = connect_start();
    $id_student = $_GET['id_student'];
    $request11 = $db->query("SELECT COUNT(*) FROM `return_exo`
    LEFT JOIN exercices ON return_exo.id_exercice = exercices.id_exercice
    WHERE id_rubrics = 3
    AND id_user = $id_student
    AND progress_exo = 'return'");

    return $request11;
}

function getValideExercice_chap4(){
    $db = connect_start();
    $id_student = $_GET['id_student'];
    $request12 = $db->query("SELECT COUNT(*) FROM `return_exo`
    LEFT JOIN exercices ON return_exo.id_exercice = exercices.id_exercice
    WHERE id_rubrics = 4
    AND id_user = $id_student
    AND progress_exo = 'valide'");

    return $request12;
}

function getInProgressExercice_chap4(){
    $db = connect_start();
    $id_student = $_GET['id_student'];
    $request13 = $db->query("SELECT COUNT(*) FROM `return_exo`
    LEFT JOIN exercices ON return_exo.id_exercice = exercices.id_exercice
    WHERE id_rubrics = 4
    AND id_user = $id_student
    AND progress_exo = 'en_class'");

    return $request13;
}

function getReturnedExercice_chap4(){
    $db = connect_start();
    $id_student = $_GET['id_student'];
    $request14 = $db->query("SELECT COUNT(*) FROM `return_exo`
    LEFT JOIN exercices ON return_exo.id_exercice = exercices.id_exercice
    WHERE id_rubrics = 4
    AND id_user = $id_student
    AND progress_exo = 'return'");

    return $request14;
}

function getValideExercice_chap5(){
    $db = connect_start();
    $id_student = $_GET['id_student'];
    $request15 = $db->query("SELECT COUNT(*) FROM `return_exo`
    LEFT JOIN exercices ON return_exo.id_exercice = exercices.id_exercice
    WHERE id_rubrics = 5
    AND id_user = $id_student
    AND progress_exo = 'valide'");

    return $request15;
}

function getInProgressExercice_chap5(){
    $db = connect_start();
    $id_student = $_GET['id_student'];
    $request16 = $db->query("SELECT COUNT(*) FROM `return_exo`
    LEFT JOIN exercices ON return_exo.id_exercice = exercices.id_exercice
    WHERE id_rubrics = 5
    AND id_user = $id_student
    AND progress_exo = 'en_class'");

    return $request16;
}

function getReturnedExercice_chap5(){
    $db = connect_start();
    $id_student = $_GET['id_student'];
    $request17 = $db->query("SELECT COUNT(*) FROM `return_exo`
    LEFT JOIN exercices ON return_exo.id_exercice = exercices.id_exercice
    WHERE id_rubrics = 5
    AND id_user = $id_student
    AND progress_exo = 'return'");

    return $request17;
}

function ajouternews(){
    $db = connect_start();
    $news = $_POST['news'];
    $titre = $_POST['titre_news'];
    $id = $_SESSION['id_user'];
    $date = date("Y-m-d");
    $date_id = date('d-m-Y H:i:s');
    $d = DateTime::createFromFormat('d-m-Y H:i:s', $date_id);
    $id_news = $d->getTimestamp();
    $request = $db->query("INSERT INTO `news` (`id_news`, `id_user`, `name_news`, `date_news`, `contents_news`) VALUES ('$id_news', '$id', '$titre', '$date', '$news')");

    return $request;
}

function getnews(){
    $db = connect_start();
    $request2 = $db->query("SELECT * FROM `news` ORDER BY `news`.`id_news` DESC");

    return $request2;
}
 
function allCountclass(){
    $db = connect_start();
    $request = $db->query("SELECT COUNT(*) FROM `class`");

    return $request;
}

function howMuchclass($id_rubrics){
    $db = connect_start();
    $request = $db->query("SELECT COUNT(*) FROM `class` WHERE id_rubrics = '$id_rubrics'");

    return $request;
}

function  countclass(){
    $db = connect_start();
    if($_SESSION['status'] == 'teacher'){
        if(isset($_POST['id_student'])){
            $id_student = $_POST['id_student'];
        }
        elseif(isset($_POST['student'])){
            $id_student = $_POST['student'];
        }
        else{
            $id_student = 1;
        }
    }else{
        $id_student = $_SESSION['id_user'];
    }
    $request3 = $db->query("SELECT COUNT(*) FROM `progress_classes` WHERE status_class = 'lu' AND id_user = $id_student");

    return $request3;

}

function howProgressclass($id_rubrics){
    $db = connect_start();
    if($_SESSION['status'] == 'teacher'){
        if(isset($_POST['id_student'])){
            $id_student = $_POST['id_student'];
        }
        elseif(isset($_POST['student'])){
            $id_student = $_POST['student'];
        }
        else{
            $id_student = 1;
        }
    }else{
        $id_student = $_SESSION['id_user'];
    }
    $request3 = $db->query("SELECT COUNT(*), c.id_rubrics 
                            FROM `progress_classes` AS pc JOIN class as c ON pc.id_class = c.id_class 
                            WHERE pc.id_user = '$id_student'  AND pc.status_class = 'lu' 
                            GROUP BY c.id_rubrics
                            HAVING c.id_rubrics LIKE '$id_rubrics'");

    return $request3;

}

function countAll(){
    $db = connect_start();
    if($_SESSION['status'] == 'teacher'){
        if(isset($_POST['id_student'])){
            $id_student = $_POST['id_student'];
        }
        elseif(isset($_POST['student'])){
            $id_student = $_POST['student'];
        }
        else{
            $id_student = 1;
        }
    }else{
        $id_student = $_SESSION['id_user'];
    }
    $request4 = $db->query("SELECT COUNT(*) FROM `return_exo` WHERE id_user = $id_student AND progress_exo = 'valide' OR progress_exo = 'return'");

    return $request4;
}

function howProgressExos($id_rubrics){
    $db = connect_start();
    if($_SESSION['status'] == 'teacher'){
        if(isset($_POST['id_student'])){
            $id_student = $_POST['id_student'];
        }
        elseif(isset($_POST['student'])){
            $id_student = $_POST['student'];
        }
        else{
            $id_student = 1;
        }
    }else{
        $id_student = $_SESSION['id_user'];
    }
    $request4 = $db->query("SELECT COUNT(*), e.id_rubrics 
                            FROM `return_exo` AS re JOIN exercices as e ON re.id_exercice = e.id_exercice 
                            WHERE re.id_user = '$id_student'  AND re.progress_exo = 'valide' OR re.progress_exo = 'return' 
                            GROUP BY e.id_rubrics
                            HAVING e.id_rubrics LIKE '$id_rubrics'");
    return $request4;
}

function countExos(){
    $db = connect_start();
    $request = $db->query("SELECT COUNT(*) FROM `exercices`");

    return $request;
}

function howMuchExos($id_rubrics){
    $db = connect_start();
    $request = $db->query("SELECT COUNT(*) FROM `exercices` WHERE id_rubrics = '$id_rubrics'");

    return $request;
}

function countAllExos(){
    $db = connect_start();
    $request = $db->query("SELECT
    (SELECT COUNT(*) FROM class) as count1,
    (SELECT COUNT(*) FROM exercices) as count2");

    return $request;
}

function firstCo(){
    $db = connect_start();
    //$id = $_SESSION['id_user'];
    $request6 = $db->query("SELECT COUNT(*) FROM `progress_classes` WHERE id_user = 3");
    

    return $request6;
}

function insertFirstCo(){
    $db = connect_start();
    $request7 = $db->query("SELECT COUNT(*) FROM `class`");
    $class = $request7->fetch();
    $class = intval($class[0]);
    $i = 1;
    if($_SESSION['status'] == 'student'){
        $id = $_SESSION['id_user'];
    }else{
        $id = $_POST['id_student'];
    }
    while($i <= $class){
        $request8 = $db->query("INSERT INTO `progress_classes`(`id_class`, `id_user`, `status_class`) VALUES ($i, $id,'non_lu')");
        $request8->fetch();
        $i++;
    }
    return $request8;
}

function addEx($chapter, $instruction, $name, $resources, $btn, $index){
    $db = connect_start();
    $db->exec("INSERT INTO exercices VALUES (NULL,'$chapter','$index','$name','$instruction',NULL)");
    getEx($name, $resources, $btn);
}

function getEx($name, $resources, $btn){
    $db = connect_start();
    $request = $db->prepare("SELECT id_exercice FROM exercices WHERE name_exercice LIKE '$name'");
    $request->execute();
    $result = $request->fetchAll();
    $id = $result["0"]["id_exercice"];
    addResources($resources, $id, $btn);
}

/*ajoute les ressources*/


/*–––––––––––––––––––––––––HOME EXERCICE ET EXERCICE––––––––––––––––––––––––––––––––*/

/*Selectionne tous les exercices d'une rubric*/
function getExWanted($rubric){
    $db = connect_start();
    $answer = $db->prepare('SELECT * FROM exercices WHERE id_rubrics = '.$rubric.'');
    $answer->execute();
    return $answer;
}

/*Selectionne les id des ressources liées à un exercice demandé*/
function getIdResources($id_exercice, $id_rubrics){
    $db = connect_start();
    $request = $db->prepare('SELECT L.url_ressource, C.* FROM links as L JOIN class as C ON L.url_ressource=C.index_class WHERE id_rubrics ="'.$id_rubrics.'"AND id_exercice = "'.$id_exercice.'"');
    $request->execute();
    return $request;
}

/*Selectionne les names des ressources voulues*/
 function getResources($id_rubrics, $id_class){
    $db = connect_start();
    $request = $db->prepare("SELECT * FROM class WHERE id_rubrics = '$id_rubrics' AND index_class = '$id_class'");
    $request->execute();
    return $request;
 }

/*Supprime un exercice*/


/*Verifie le statut des exercices pour voir s'il y en a un en class*/
 function verifyStatusEx($id_user, $id_ex){
    $db = connect_start();
    if($_SESSION["status"] == "student"){
        $request = $db->prepare("SELECT * FROM return_exo WHERE id_user = '$id_user' AND progress_exo LIKE 'en_class'");
        $request->execute();
        $result = $request->fetchAll();
        if(empty($result)){
            pasLuEnclass($id_user, $id_ex);
        }
    }  
 }

 /*Passe le statut d'un exercice à en_class*/
 function pasLuEnclass($id_user, $id_ex){
    $db = connect_start();
    $db->exec("INSERT INTO return_exo VALUES (NULL,'$id_user','$id_ex',NULL,'en_class')");
 }

 /*Verifie si un exercice superieur existe*/
 function verifyIssetExSup($index, $id_ru){
    $db = connect_start();
    $request = $db->prepare("SELECT * FROM exercices WHERE index_exercice='$index' AND id_rubrics='$id_ru'");
    $request->execute();
    $result = $request->fetchAll();
    if($result){
        $type_btn = "submit";
    }
    
    return $type_btn;
 }

function verifyIssetExSupRub($id_ru){
    $db = connect_start();
    $request = $db->prepare("SELECT * FROM exercices WHERE index_exercice = '1' AND id_rubrics = '$id_ru2'");
    $request->execute();
    $result = $request->fetchAll();
    if($result){
        $type_btn = "submit2";
    }
    else {
        $type_btn = "hidden";
    }
}

function findIndex($rubric){
    $db = connect_start();
    $request = $db->query("SELECT * FROM exercices WHERE id_rubrics = '$rubric'");
    return $request;
}

function showCurrentEx($id_user){
    $db = connect_start();
    $request = $db->query("SELECT RE.id_exercice, E.index_exercice, E.id_rubrics, E.name_exercice, RU.name_rubric FROM return_exo as RE JOIN exercices as E ON RE.id_exercice = E.id_exercice JOIN rubrics as RU on E.id_rubrics = RU.id_rubrics WHERE RE.id_user = '$id_user' AND RE.progress_exo = 'en_class'");
    return $request;
}



function fileToBddEval($file, $id_ex){
    $db = connect_start();
    $id_user = $_SESSION['id_user'];
    $req = "INSERT INTO return_eval VALUES (NULL, '$id_user', '$id_ex', '$file')";
    $request = $db->prepare($req);
    $request->execute();
}

function verify1($id_user){
    $db = connect_start();
    $request = $db->prepare("SELECT * FROM return_exo WHERE id_user = '$id_user' AND progress_exo = 'en_class'");
    $request->execute();
    return $request;
}

function verify2($id_user){
    $db = connect_start();
    $request = $db->prepare("SELECT * FROM return_exo WHERE id_user = '$id_user' AND progress_exo = 'return'");
    $request->execute();
    return $request;
}
function verify3($id_user){
    $db = connect_start();
    $request = $db->prepare("SELECT * FROM return_exo WHERE id_user = '$id_user' AND progress_exo = 'valide'");
    $request->execute();
    return $request;
}

function correctExos($id_exo) {
    $db = connect_start();
    if($_SESSION["status"] == "student"){
        $id_student = $_SESSION["id_user"]; 
    }
    else{
        $id_student = $_POST['id_student'];
    }
    $request = $db->query("SELECT *
    FROM return_exo 
    WHERE id_user = '$id_student'
    AND id_exercice = '$id_exo'");
    return $request;
}

function correctExosEval($id_exo) {
    $db = connect_start();
    $id_student = $_SESSION["id_user"]; 
    $request = $db->query("SELECT *
    FROM return_eval 
    WHERE id_user = '$id_student'
    AND id_exo_eval = '$id_exo'");
    return $request;
}


?>
