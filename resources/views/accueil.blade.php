<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/26e46cf4bd.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="/css/imgs/Logo-GGr-icon.ico" />
    <title>Gaminger - Accueil</title>
    <link rel="stylesheet" href="/css/accueil.css">
    <link href="/fontawesome-free" rel="stylesheet">

</head>


<body>

    <div class="header">
        <div class="header-right">
            <img class="logo" src="/css/imgs/Logo-GGr.png">
            <a class="accueil" id="actif" href="accueil">Accueil</a>
            <a href="cocktails">Cocktails</a>
            <a href="events">Événements</a>
            <a href="contact">Contact</a>
            <a class="menu" href="admin">
                <i class="fa-solid fa-user" style="color: white;"></i>
            </a>
        </div>
    </div>

    <div class="banner">
        <h1 class="gaminger-titre">Gaminger</h1>
        <h1>Bar événementiel gaming</h1>
        <div class="banner-boutons">
            <a href="/cocktails">Nos cocktails</a>
            <a href="/events" class="button-event">Nos événements</a>
        </div>
    </div>

    <div class="partie-a-propos">
        <div class="div-gauche-a-propos">
        </div>

        <div class="a-propos">
            <h2>À propos du bar</h2>
            <p>Établi à Nevers depuis 2022, Gaminger a su innover dans son approche auprès de sa clientèle : les amateurs de jeux vidéo.<br>
                Fondé par deux amateurs d'alcool et de jeux vidéo, Gaminger, c'est surtout de l'alcool, des événements, du jeu vidéo et beaucoup de fun.<br>
                Pendant que l'un s'occupe de la confection de cocktails, l'autre s'occupe de l'animation des différents événements ainsi que de la communication autour de ces derniers et de la maintenance du site.<br><br>
                Alors, n'hésitez plus, venez faire un tour et surveillez régulièrement les réseaux sociaux ainsi que le site car de nouvelles choses arrivent très vite...</p>
        </div>

        <div class="div-droite-a-propos">
        </div>
    </div>

    <div class="partie-nos-services">
        <div class="div-gauche-nos-services">
        </div>

        <div class="nos-services">
            <h2>Nos services</h2><br><br>
            <div class="icones">
                <div class="first-ligne">
                    <div class="carte">
                        <i class="fa-solid fa-map-location-dot map"></i><br><br>
                        <i class="sur-place">Sur place</i>
                    </div>
                    <div class="verre">
                        <i class="fa-solid fa-martini-glass glass"></i><br><br>
                        <i class="des-cocktails">Des <br> cocktails</i>
                    </div>
                </div>
                <div class="second-ligne">
                    <div class="calendrier">
                        <i class="fa-solid fa-calendar-days calendar"></i><br><br>
                        <i class="des-events">Des <br> événements</i>
                    </div>
                    <div class="cocher">
                        <i class="fa-solid fa-square-check checked"></i></i><br><br>
                        <i class="du-fun">Du fun</i>
                    </div>
                </div>
            </div><br>
        </div>

        <div class="div-droite-nos-services">
        </div>
    </div>

    <div class="partie-notre-bar">
        <div class="div-gauche-notre-bar">
        </div>

        <div class="notre-bar">
            <h2>Notre bar <strong class="en-images">en images</strong></h2><br><br>
            <div class="part1">
                <div class="bar-img1">
                    <img class="img1" src="/css/imgs/img1.jpg"></img>
                </div>
                <div class="bar-img2">
                    <img class="img2" src="/css/imgs/img2.jpg"></img>
                </div>
            </div>
            <div class="part2">
                <div class="bar-img3">
                    <img class="img3" src="/css/imgs/img3.jpg"></img>
                </div>
                <div class="bar-img4">
                    <img class="img4" src="/css/imgs/img4.jpg"></img>
                </div>
            </div>
        </div>

        <div class="div-droite-notre-bar">
        </div>


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