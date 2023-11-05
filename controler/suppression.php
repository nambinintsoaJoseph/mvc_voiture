<?php 
    require_once('../model/model.php'); 

    if(isset($_GET['matricule'])) {
        $voiture_a_supprimer = new Voiture($_GET['matricule'], "", "", ""); 
        $voiture_a_supprimer->supprimer_dans_la_base(); 

        header('location:../vue/index.php'); 
    }
?>