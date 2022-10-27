<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/26e46cf4bd.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Gaminger - Accueil</title>
    <link rel="stylesheet" href="/gaminger/resources/css/accueil.css">
    <link href="/gaminger/resources/fontawesome-free" rel="stylesheet">

</head>

<body>

    <ul class="menu">
        <li>
            <img class="logo" src="/gaminger/resources/css/imgs/Logo-GGr.png"></img>
        </li>
        <li>
            <a href="accueil" class="actif">Accueil</a>
        </li>
        <li>
            <a href="cocktails">Cocktails</a>
        </li>
        <li>
            <a href="events">Événements</a>
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
        <img class="banner" src="/gaminger/resources/css/imgs/banner-site.jpg"></img>
        <h1 class="titre-banner">Gaminger<br>Bar événementiel gaming</h1>
        <div class="boutons">
            <a class="cocktails" href="">Nos cocktails</a>
            <a class="events" href="">Nos événements</a>
        </div>
    </div>
    <div class="a-propos">
        <h2>À propos du bar</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br><br>
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="nos-services">
        <h2>Nos services</h2><br><br>
        <div class="icones">
            <div>
                <i class="fa-solid fa-map-location-dot map"></i><br><br>
                <i class="sur-place">Sur place</i>
            </div>
            <div>
                <i class="fa-solid fa-martini-glass glass"></i><br><br>
                <i class="des-cocktails">Des cocktails</i>
            </div>
            <div>
                <i class="fa-solid fa-calendar-days calendar"></i><br><br>
                <i class="des-events">Des événements</i>
            </div>
            <div>
                <i class="fa-solid fa-square-check checked"></i></i><br><br>
                <i class="du-fun">Du fun</i>
            </div>
        </div><br>
    </div>
    <div class="notre-bar">
        <h2>Notre bar <strong class="en-images">en images</strong></h2><br><br>
        <div class="bar-img1">
            <img class="img1" src="/gaminger/resources/css/imgs/img1.jpg"></img>
            <img class="img2" src="/gaminger/resources/css/imgs/img2.jpg"></img>
        </div><br>
        <div class="bar-img2">
            <img class="img3" src="/gaminger/resources/css/imgs/img3.jpg"></img>
            <img class="img4" src="/gaminger/resources/css/imgs/img4.jpg"></img>
        </div>
    </div><br><br>

    <div class="footer">
        <div>
            <img class="logo2" src="/gaminger/resources/css/imgs/Logo-GGr.png"></img>
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