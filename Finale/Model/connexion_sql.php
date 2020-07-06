<?php 
function connexion_db() {
                $host = "127.0.0.1";
                $dbname = "athena";
                $user= "root";
                $mdp = "root";
                $port = "8889";
                try {
                        $db = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $mdp);
                        
                        // set the PDO error mode to exception
                        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
                        return $db;
                }
                catch(PDOException $e)
                {
                        echo "Connection failed: " . $e->getMessage();
                }
}
?>