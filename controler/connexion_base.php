<?php 
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=mvc_voiture;charset=utf8', 'root', ''); 
    }
    catch(Exception $erreur) {
        die('Erreur de connexion a la base : ' . $e->getMessage()); 
    }
?>