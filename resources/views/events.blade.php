<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/26e46cf4bd.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="/css/imgs/Logo-GGr-icon.ico" />
    <title>Gaminger - Nos événements</title>
    <link rel="stylesheet" href="/css/event.css">
    <link href="/fontawesome-free" rel="stylesheet">

</head>

<body>

    <ul class="menu">
        <li>
            <img class="logo" src="/css/imgs/Logo-GGr.png"></img>
        </li>
        <li>
            <a href="accueil">Accueil</a>
        </li>
        <li>
            <a href="cocktails">Cocktails</a>
        </li>
        <li>
            <a href="events" class="actif">Événements</a>
        </li>
        <li>
            <a href="contact">Contact</a>
        </li>
        <li>
            <a href="admin">
                <i class="fa-solid fa-user" style="color: white;"></i>
            </a>
        </li>
    </ul>

    <div>
        <div class="titre">
            <h2>Nos événements</h2>
        </div>
    </div>

    <div class="nos-events">

        @if (isset($events))
        @foreach ($events as $event)
        <div class="events">
            <img src='uploads/{{$event -> image}}'><br><br>
            <p><span style="font-weight: bold">{{$event->nom}}</span>

                <br>{{$event->date}}
                <br>{{$event->description}}
            </p>
        </div>
        @endforeach
        @else
        <div>Aucun événement de créé</div>
        @endelse
        @endif
    </div>

    <div class="footer">
        <div>
            <img class="logo2" src="/css/imgs/Logo-GGr.png"></img>
        </div>
        <div class="texte">
            <div>
                <a href="">Mentions légales</a>
            </div>
            <div>
                <a href="">Politique de confidentialité</a>
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