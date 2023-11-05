<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>MVC - Voiture </title>
</head>
<body>
    <div>
        <a href="ajouter.php" class="add">Ajouter une voiture</a>
    </div>

    <h1>Liste des voitures</h1>

    <?php require('../controler/connexion_base.php'); ?>

    <?php 
        $requette = $bdd->query('SELECT * FROM voiture');

        while($donnee = $requette->fetch()) {
    ?>
    <div class="conteneur-flexible flex-direction-column conteneur-list-voiture">
        <div>
            <p>Matricule : <?php echo $donnee['matricule']; ?></p>
            <input type="hidden" value="<?php echo $donnee['matricule']?>">
        </div>

        <div>
            <p>Couleur : <?php echo $donnee['couleur']; ?> </p>
        </div>

        <div>
            <p>Puissance : <?php echo $donnee['puissance']; ?> </p>
        </div>
        
        <div>
            <p>Type : <?php echo $donnee['type']; ?> </p>
        </div>

        <div class="conteneur-flexible">
            <a href="../vue/modifier.php?<?php echo 'matricule=' . $donnee['matricule'] . '&couleur=' . $donnee['couleur'] . '&puissance=' . $donnee['puissance'] . '&type=' . $donnee['type']; ?>" class="flex-grow modifier">Modifier</a>
            <a href="../controler/suppression.php?<?php echo 'matricule=' . $donnee['matricule']; ?>" class="flex-grow supprimer">Supprimer</a>
        </div>
    </div>
    <?php 
        }
    ?>
</body>
</html>