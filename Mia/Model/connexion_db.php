<?php 
             function connexion_db() {
    
                try {
                    $db = new PDO('mysql:host=localhost;dbname=athena;charset=UTF8','root','');
                }
                catch(Exeption $e) {
                    die('Erreur :'.$e->getMessage());
                }
                return $db;
            }
?>