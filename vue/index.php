<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>MVC - Voiture</title>
</head>
<body>
    <div>
        <a href="ajouter.php" class="btn">Ajouter une voiture</a>
    </div>

    <h1>Liste des voitures</h1>

    <?php require('../controler/connexion_base.php'); ?>

    <table>
        <tr>
            <th>Matricule</th>
            <th>Couleur</th>
            <th>Puissance</th>
            <th>Type</th>
            <th colspan="2">Action</th>
        </tr>

    <?php 
        $requette = $bdd->query('SELECT * FROM voiture ORDER BY id DESC');

        while($donnee = $requette->fetch()) 
        {
    ?>
                <tr>
                    <td><?php echo $donnee['matricule']; ?></td>
                    <td><?php echo $donnee['couleur']; ?></td>
                    <td><?php echo $donnee['puissance']; ?></td>
                    <td><?php echo $donnee['type']; ?></td>
                    <td><a href="../vue/modifier.php?<?php echo 'matricule=' . $donnee['matricule'] . '&couleur=' . $donnee['couleur'] . '&puissance=' . $donnee['puissance'] . '&type=' . $donnee['type']; ?>" class="flex-grow modifier btn">Modifier</a></td>
                    <td><a href="../controler/suppression.php?<?php echo 'matricule=' . $donnee['matricule']; ?>" class="flex-grow supprimer btn">Supprimer</a></td>
                </tr>
            <?php 
                
        }
        ?>
    </table>
</body>
</html>