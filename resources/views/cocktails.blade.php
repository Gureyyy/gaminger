<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/26e46cf4bd.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="/css/imgs/Logo-GGr-icon.ico" />
    <title>Gaminger - Cocktails</title>
    <link rel="stylesheet" href="/css/cocktail.css">
    <link href="/fontawesome-free" rel="stylesheet">

</head>

<body>

    <div class="header">
        <div class="header-right">
            <img class="logo" src="/css/imgs/Logo-GGr.png">
            <a class="accueil" href="accueil">Accueil</a>
            <a href="cocktails" class="actif">Cocktails</a>
            <a href="events">Événements</a>
            <a href="contact">Contact</a>
            <a class="menu" href="admin">
                <i class="fa-solid fa-user" style="color: white;"></i>
            </a>
        </div>
    </div>

    <div>
        <div class="titre">
            <h2>Nos cocktails</h2>
        </div>
    </div>
    <div class="nos-menus">
        @if (isset($cocktails))
        @foreach ($cocktails as $cocktail)
        <div class="nos-cocktails">
            <img class="img-cocktail" src='/uploads/{{$cocktail -> image}}'><br><br>
            <p class="details"><span style="font-weight: bold">{{$cocktail->nom}}</span>

                <br>{{$cocktail->prix}} &euro;
                <br>{{$cocktail->description}}
            </p>
        </div>
        @endforeach
        @else
        <div>Aucun cocktail de créé</div>
        @endelse
        @endif
    </div>

    <div class="footer">
        <div>
            <img class="logo" src="/css/imgs/Logo-GGr.png"></img>
        </div>
        <div class="texte">
            <div class="mentions">
                <a href="/mentions">Mentions légales</a>
            </div>
            <div class="confid">
                <a href="/confid">Politique de confidentialité</a>
            </div>
        </div>
        <div class="social">
            <div>
                <a href="https://twitter.com"><i class="fa-brands fa-twitter twitter"></i></a>
            </div>
            <div>
                <a href="https://instagram.com"><i class="fa-brands fa-instagram insta"></i></a>
            </div>
        </div><br>
    </div>
    <p class="end-footer">Gaminger - Copyright 2022<br><br></p>

</body>

</html>