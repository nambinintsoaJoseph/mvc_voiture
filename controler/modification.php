<?php 
    require_once('../model/model.php'); 

    // On commence par creer un objet vide : 
    $voitureAModifier = new Voiture("", "", "", ""); 

    if(isset($_POST['matricule']) and isset($_POST['couleur']) and isset($_POST['puissance']) and isset($_POST['type']))
    {
        
    }
?>