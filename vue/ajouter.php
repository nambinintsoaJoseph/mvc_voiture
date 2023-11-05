<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="flex.css">
</head>
<body>
    <h1>Formulaire d'ajour d'une voiture</h1>
    <form action="../controler/insertion.php" method="POST" class="conteneur-flexible flex-direction-column">
        <div class="conteneur-flexible">
            <label for="matricule" class="flex-basis20">Matricule : </label>
            <input type="text" name="matricule" id="matricule" class="flex-grow">
        </div>
        
        <div class="conteneur-flexible">
            <label for="couleur" class="flex-basis20">Couleur : </label>
            <input type="text" name="couleur" id="couleur" class="flex-grow">
        </div>
        

        <div class="conteneur-flexible">
            <label for="puissance" class="flex-basis20">Puissance : </label>
            <input type="text" name="puissance" id="puissance" class="flex-grow">
        </div>
        

        <div class="conteneur-flexible">
            <label for="type" class="flex-basis20">Type : </label>
            <input type="text" name="type" id="type" class="flex-grow">
        </div>
        
        <br>
        <input type="submit" value="Ajouter" class="btn">
    </form>
</body>
</html>