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
            <form class="composition" action="/administrateur/editCocktail" enctype="multipart/form-data" method="POST" >
                @csrf
                <input type="hidden" value="{{$cocktail['id']}}" name="id" />
                <input class="image-cocktail" type="file" name="image"></input><br><br>
                <input class="titre-cocktail" value="{{$cocktail['name']}}" type="text" name="name" placeholder="Nom du cocktail..."></input><br><br>
                <input class="prix-cocktail" type="number" value="{{$cocktail['price']}}" name="price" placeholder="Prix du cocktail..." step="0.01"></input><br><br>
                <textarea class="description-cocktail" name="description" placeholder="Description du cocktail...">{{$cocktail['desc']}}</textarea><br><br>
                <input class="ajouter" type="submit" value="Enregistrer"></input><br>
            </form>
            <a href="/administrateur/listCocktails">
                <button class="retour" type="button">Retour</button>
            </a>
        </div>

        <div class="div-droite-edit">
        </div>
    </div>
</body>

</html>