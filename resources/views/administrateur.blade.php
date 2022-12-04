<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/26e46cf4bd.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="/css/imgs/Logo-GGr-icon.ico" />
    <title>Gaminger - Espace Admin</title>
    <link rel="stylesheet" href="/css/admin-view.css">
    <link href="/fontawesome-free" rel="stylesheet">

</head>

<body>
    <div class="partie-admin">
        <div class="div-gauche-admin">
        </div>

        <div class="admin">
            <h2>Espace - Administrateur</h2>
            <h3>Faites vos modifications :</h3>
            <div class="admin-boutons">
                <a href="/administrateur/listCocktails">Modifier les cocktails</a>
                <a href="/administrateur/createCocktail">Ajouter un cocktail</a>
                <a href="/administrateur/editEvent">Modifier les événements</a>
                <a href="/administrateur/createEvent">Ajouter un événement</a>
            </div><br>
            <a href="/logout">
                <button class="deconnect">Déconnexion</button>
            </a>
        </div>

        <div class="div-droite-admin"></div>
        </div>
    </div>

    <body>