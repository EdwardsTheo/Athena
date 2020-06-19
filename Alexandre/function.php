<?php

function connectBDD() {
        
        try
        {
            return $bdd = new PDO('mysql:host=localhost;dbname=freq;charset=utf8', 'root', '');
        }
        catch(Exception $e)
        {
            return die('Erreur : '.$e->getMessage());
        }
    }

function getUser() {
    $ipAddress = $_SERVER['REMOTE_ADDR'];
        
    if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
        $ipAddress = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
    }
        
    $test = ipBDD($ipAddress);
        
    if($test == true) {
        $actual_date = get_Date();
        $bdd = connectBDD();
    
        $req = $bdd->prepare('INSERT INTO frequentation(ip_adress, connex_date)
        VALUES(:ip_adress, :connex_date)');
        $req->execute(array(
            'ip_adress' => $ipAddress,
            'connex_date' => $actual_date
        ));
    } 
}
    
function ipBDD($ip) {
    $test = true;
    $bdd = connectBDD(); 
    $response = $bdd->query('SELECT ip_adress, connex_date FROM frequentation');
    $actual_date = get_Date();
    while($data = $response->fetch()) {
        $ip_bdd = $data['ip_adress'];
        $date_bdd = $data['connex_date'];
            
        if($date_bdd == $actual_date && $ip_bdd == $ip) {
            $test = false;
        }
    }
    $response->closeCursor();
    return $test;
}

function get_Date() {
    return $date = date('Y-m-d');
}


function howMuchDays() {
    $count = 0;
    $i = 0;
    $liste = array();
    $bdd = connectBDD();
    $last_date = null; 
    $response = $bdd->query('SELECT connex_date FROM frequentation ORDER BY connex_date ASC');

    while($data = $response->fetch()) {
        $date = $data['connex_date'];
        $date_day = substr($date, 8, 2);
        $date_month = substr($date, 5, 2);
        
        if($date_month === date('m')) {
            
            if(empty($liste)) {
                $liste[$i]["nom"] = $date_day;
                $liste[$i]["nb"] = 0;
                $i++;
            }
            else {
               $test = toList($liste, $i, $date_day);
               if($test != true) {
                    $liste[$i]["nom"] = $date_day;
                    $liste[$i]["nb"] = 0;
                    $i++;
                    
               }
               else {
                $liste[$i-1]["nb"] = $liste[$i-1]["nb"] + 1;
               }
            }    
        }  
    }
    $string = "Pourcentage de Connexion de la journée du ";
    $percent = KnowPercent();
    printGraph($liste, $percent, $string);        
}


function howMuchMonth() {
    $count = 0;
    $i = 0;
    $liste = array();
    $bdd = connectBDD();
    $last_date = null; 
    $response = $bdd->query('SELECT connex_date FROM frequentation ORDER BY connex_date ASC');

    while($data = $response->fetch()) {
        $date = $data['connex_date'];
        $date_years = substr($date, 0, 4);
        $date_month = substr($date, 5, 2);
        if($date_years === date('Y')) {
           
            if(empty($liste)) {
                $liste[$i]["nom"] = $date_month;
                $liste[$i]["nb"] = 0;
                $i++;
            }
            else {
               $test = toList($liste, $i, $date_month);
               if($test != true) {
                    $liste[$i]["nom"] = $date_month;
                    $liste[$i]["nb"] = 0;
                    $i++;
                    
               }
               else {
                $liste[$i-1]["nb"] = $liste[$i-1]["nb"] + 1;
               }
            }    
        }  
    }
    $string = "Pourcentage de Connexion pour le mois : ";
    $percent = KnowPercentMonth();
    printGraph($liste, $percent, $string);        
}

function howMuchYears() {
    $count = 0;
    $i = 0;
    $liste = array();
    $bdd = connectBDD();
    $last_date = null; 
    $response = $bdd->query('SELECT connex_date FROM frequentation ORDER BY connex_date ASC');

    while($data = $response->fetch()) {
        $date = $data['connex_date'];
        $date_year = substr($date, 0, 4);
        
        if(empty($liste)) {
            $liste[$i]["nom"] = $date_year;
            $liste[$i]["nb"] = 0;
            $i++;
            }
            else {
               $test = toList($liste, $i, $date_year);
               if($test != true) {
                    $liste[$i]["nom"] = $date_year;
                    $liste[$i]["nb"] = 0;
                    $i++;
                    
               }
               else {
                $liste[$i-1]["nb"] = $liste[$i-1]["nb"] + 1;
               }
            }    
    }
    $string = "Pourcentage de connexion pour l'année ";
    $percent = KnowPercentYears();
    printGraph($liste, $percent, $string);        
}

function toList($array, $i, $date_day) {
    foreach($array as $key => $value) {
        if($value["nom"] == $date_day) {
            return true;
        }
    }
}

function printGraph($liste, $percent, $string) {
    $percentForDay = 0;
    foreach($liste as $key => $value) {
        for($i = -1; $i < $value['nb']; $i++) {
            $percentForDay = $percentForDay + $percent;
        }
        ?>
                     
        <div class="jour">
            <?php echo  $string . $value["nom"] ?>
        </div>
    
        <div class="bar">
            <div class="bar1" style="width: <?php echo $percentForDay; ?>%; background: #2ecc71;">
                <?php echo $percentForDay?>%
            </div>
        </div>
        
        <?php
        $percentForDay = 0;
    }
}

function KnowPercent() {
    $count = 0;
    $bdd = connectBDD();
    $response = $bdd->query('SELECT connex_date FROM frequentation');
    while($data = $response->fetch()) {
        $date = $data['connex_date'];
        $date_day = substr($date, 8, 2);
        $date_month = substr($date, 5, 2);
        if($date_month === date('m')) {
            $count++;
        }
    }
    $percent = (1 * 100) / $count;
    $percent = round($percent, 2);
    return $percent;
}

function KnowPercentYears() {
    $count = 0;
    $bdd = connectBDD();
    $response = $bdd->query('SELECT connex_date FROM frequentation');
    while($data = $response->fetch()) {
        $date = $data['connex_date'];
        $date_years = substr($date, 0, 4);
        $count++;
    }
    $percent = (1 * 100) / $count;
    $percent = round($percent, 2);
    return $percent;
}

function KnowPercentMonth() {
    $count = 0;
    $bdd = connectBDD();
    $response = $bdd->query('SELECT connex_date FROM frequentation');
    while($data = $response->fetch()) {
        $date = $data['connex_date'];
        $date_years = substr($date, 0, 4);
        $date_month = substr($date, 5, 2);
        if($date_years === date('Y')) {
            $count++;
        }
    }
    $percent = (1 * 100) / $count;
    $percent = round($percent, 2);
    return $percent;
}

    
?>