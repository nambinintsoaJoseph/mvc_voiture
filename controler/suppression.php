<?php 
    require_once('../controler/')
    if(isset($_POST['matricule']) and isset($_POST['couleur']) and isset($_POST['puissance']) and isset($_POST['type'])) {
        $voitureConcerne = new Voiture($_POST['matricule'], $_POST['couleur'], $_POST['puissance'], $_POST['type']); 
        $voitureConcerne->supprimer_dans_la_base();
    }
?>