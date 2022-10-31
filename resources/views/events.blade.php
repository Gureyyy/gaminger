<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/26e46cf4bd.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="/gaminger/public/css/imgs/Logo-GGr-icon.ico"/>
    <title>Gaminger - Nos événements</title>
    <link rel="stylesheet" href="/gaminger/public/css/event.css">
    <link href="/gaminger/public/fontawesome-free" rel="stylesheet">

</head>

<body>

    <ul class="menu">
        <li>
            <img class="logo" src="/gaminger/public/css/imgs/Logo-GGr.png"></img>
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
    </ul><br><br>

    <div class="nos-events">
        <h2>Nos événements</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p><br><br>
    </div>

    <hr><br>

    <div class="perso-events">
        <h2>"Propose nous ton idée !"</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><br><br>
    </div>
    <form class="idee">
        <input class="idee1" type="text" placeholder="Nom de votre événement..."></input><br><br>
        <textarea class="idee2" placeholder="Votre idée d'événement..."></textarea><br><br>
        <input class="idee3" type="submit" value="Envoyer"></input>
    </form><br><br><br>

    <div class="footer">
        <div>
            <img class="logo2" src="/gaminger/public/css/imgs/Logo-GGr.png"></img>
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