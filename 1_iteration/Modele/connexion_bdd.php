<?php 
    function connexion_bdd() {
        try{
            $bdd = new PDO('mysql:host=localhost;dbname=athena;charset=UTF8','root','');
        }
        catch(Exeption $e){
            die('Erreur :'.$e->getMessage());
        }
        return $bdd;
    }
?>