<?php 
    session_start(); 

    require_once('../model/model.php'); 

    // On commence par creer un objet qui contient l'ancien matricule :  
    $voitureAModifier = new Voiture($_SESSION['ancien_matricule'], "", "", ""); 

    if(isset($_POST['matricule']) and isset($_POST['couleur']) and isset($_POST['puissance']) and isset($_POST['type']))
    {
        $voitureAModifier->modifier_dans_la_base($_SESSION['ancien_matricule'], $_POST['matricule'], $_POST['couleur'], $_POST['puissance'], $_POST['type']); 
        
        header('location:../vue/liste.php'); 
    }
?>