<?php 
                $host = "127.0.0.1";
                $dbname = "Athena";
                $user= "root";
                $mdp = "root";
                $port = "8889";
                try {
                        $bdd = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $mdp);
                        
                        // set the PDO error mode to exception
                        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
                        return $bdd;
                }
                catch(PDOException $e)
                {
                        echo "Connection failed: " . $e->getMessage();
                }
        //var_dump($bdd);

?>