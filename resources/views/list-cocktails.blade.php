<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des cocktails</title>
    <link rel="stylesheet" href="/css/list-cocktails.css">
    <script src="https://kit.fontawesome.com/26e46cf4bd.js" crossorigin="anonymous"></script>
    <link href="/fontawesome-free" rel="stylesheet">
    <link rel="shortcut icon" href="/css/imgs/Logo-GGr-icon.ico" />
</head>

<body>
    <div class="nos-menus">
        @if (isset($cocktails))
        @foreach ($cocktails as $cocktail)
        <div class="nos-cocktails">
            <img class="img-cocktail" src='/uploads/{{$cocktail -> image}}'><br>
            <p><span style="font-weight: bold">{{$cocktail->nom}}</span>

                <br>{{$cocktail->prix}} &euro;
                <br>{{$cocktail->description}}
            </p><br>
            <a href="/administrateur/cocktail/{{$cocktail->id}}">
                <button>Modifier ce cocktail</button>
            </a>
            <a href="/administrateur/cocktail/delete/{{$cocktail->id}}">
                <i style="color: white" class="fa-solid fa-trash trash"></i>
            </a>
        </div>
        @endforeach
        @else
        <div>Aucun cocktail de créé</div>
        @endelse
        @endif
    </div>
    <a href="/administrateur">
        <button class="retour" type="button">Retour</button>
    </a>
</body>

</html>