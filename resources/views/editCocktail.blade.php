<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/css/imgs/Logo-GGr-icon.ico" />
    <link rel="stylesheet" href="/css/editCocktail.css">
    <title>Gaminger - Modifier un cocktail</title>
</head>

<body>
    <div class="partie-edit">
        <div class="div-gauche-edit">
        </div>

        <div class="edit">
            <h2>Modifier un cocktail :</h2>
        </div>
        <div class="formulaire">
            <form class="composition">
                <input class="image-cocktail" type="file" name="picture-cocktail"></input><br><br>
                <input class="titre-cocktail" type="text" placeholder="Nom du cocktail..."></input><br><br>
                <input class="prix-cocktail" type="number" name="price" placeholder="Prix du cocktail..."></input><br><br>
                <textarea class="description-cocktail" placeholder="Description du cocktail..."></textarea><br><br>
                <input class="ajouter" type="submit" value="Envoyer"></input>
            </form>
        </div>

        <div class="div-droite-edit">
        </div>
    </div>
</body>

</html>