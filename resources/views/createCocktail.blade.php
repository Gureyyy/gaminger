<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/css/imgs/Logo-GGr-icon.ico" />
    <link rel="stylesheet" href="/css/createCocktail.css">
    <title>Gaminger - Ajouter un cocktail</title>
</head>

<body>
    <div class="partie-create">
        <div class="div-gauche-create">
        </div>

        <div class="create">
            <h2>Ajouter un cocktail :</h2>
        </div>
        <div class="formulaire">
            <form class="composition" action="/administrateur/createCocktail" method="post" enctype="multipart/form-data">
            @csrf
                <input class="image-cocktail" type="file" name="picture"></input><br><br>
                <input class="titre-cocktail" type="text" name="name" placeholder="Nom du cocktail..."></input><br><br>
                <input class="prix-cocktail" type="number" name="price" placeholder="Prix du cocktail..." step="0.01"></input><br><br>
                <textarea class="description-cocktail" name="description" placeholder="Description du cocktail..."></textarea><br><br>
                <input class="ajouter" type="submit" value="Envoyer"></input>
            </form>
        </div>

        <div class="div-droite-create">
        </div>
    </div>
</body>

</html>