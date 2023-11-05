<?php 
    require_once('../model/model.php'); 

    if(isset($_POST['matricule']) and isset($_POST['couleur']) and isset($_POST['puissance']) and isset($_POST['type'])) {
        $matricule = $_POST['matricule']; 
        $couleur = $_POST['couleur']; 
        $puissance = $_POST['puissance']; 
        $type = $_POST['type']; 

        // Instanciation de la classe Voiture : 
        $maVoiture = new Voiture($matricule, $couleur, $puissance, $type); 

        // Insertion dans la base de donnée : 
        $maVoiture->inserer_dans_la_base(); 

        // Redirection vers index.php 
        header('location:../vue/index.php'); 
    }
?>