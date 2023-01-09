<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/26e46cf4bd.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="/css/imgs/Logo-GGr-icon.ico" />
    <title>Gaminger - Accueil</title>
    <link rel="stylesheet" href="/css/accueil.css">
    <link href="/fontawesome-free" rel="stylesheet">
    <style>
        :root {
            --bs-primary: #505050;
            --bs-primary-hover: #897267;
            --bs-primary-rgb: 80, 80, 80;
        }

        .text-48 {
            color: #484848;
        }
    </style>

</head>

<body>
    <header class="header">
        <div class="header-right">
            <a href="/accueil"><img class="logo" src="/css/imgs/Logo-GGr.png"></a>
            <a class="accueil" id="actif" href="accueil">Accueil</a>
            <a href="cocktails">Cocktails</a>
            <a href="events">Événements</a>
            <a href="contact">Contact</a>
            <a class="menu" href="admin">
                <i class="fa-solid fa-user" style="color: white;"></i>
            </a>
        </div>
    </header>

    <main>
        <section>
            <div class="banner">
                <h1 class="gaminger-titre">Gaminger</h1>
                <h1>Bar événementiel gaming</h1>
                <div class="banner-boutons">
                    <div class="bouton-cocktail">
                        <a href="/cocktails">Nos cocktails</a>
                    </div>
                    <div classs="bouton-event">
                        <a href="/events" class="button-event">Nos événements</a>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="partie-a-propos">
                <div class="a-propos">
                    <h2>À propos du bar</h2>
                    <p>Établi à Nevers depuis 2022, Gaminger a su innover dans son approche auprès de sa clientèle : les amateurs de jeux vidéo.<br>
                        Fondé par deux amateurs d'alcool et de jeux vidéo, Gaminger, c'est surtout de l'alcool, des événements, du jeu vidéo et beaucoup de fun.<br>
                        Pendant que l'un s'occupe de la confection de cocktails, l'autre s'occupe de l'animation des différents événements ainsi que de la communication autour de ces derniers et de la maintenance du site.<br><br>
                        Alors, n'hésitez plus, venez faire un tour et surveillez régulièrement les réseaux sociaux ainsi que le site car de nouvelles choses arrivent très vite...</p>
                </div>
            </div>
        </section>
        <section>
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
                            <i class="des-cocktails">Cocktails</i>
                        </div>
                    </div>
                    <div class="second-ligne">
                        <div class="calendrier">
                            <i class="fa-solid fa-calendar-days calendar"></i><br><br>
                            <i class="des-events">Événements</i>
                        </div>
                        <div class="cocher">
                            <i class="fa-solid fa-square-check checked"></i></i><br><br>
                            <i class="du-fun">Du fun</i>
                        </div>
                    </div>
                </div><br>
            </div>
        </section>

        <section>
            <div class="notre-bar">
                <h2>Notre bar <span class="en-images">en images</span></h2><br><br>
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
        </section>
    </main>

    <footer class="mt-5">
        <div class="first bg-primary" style="height: 80px">
            <div class="text-center">
                <div class="d-flex text-white mx-auto justify-content-center">
                    <a href="#" class="text-white m-3 fs-4"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="text-white m-3 fs-4"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="second bg-primary" style="height: 30px">
                    <a class="text-white text-center text-decoration-none" href="/mentions">Mentions légales</a>
                </div>
                <div class="third bg-primary pb-5" style="height: 30px">
                    <a class="text-white text-center text-decoration-none" href="/confid">Politique de confidentialités</a>
                </div>
            </div>
            <div class="last bg-primary" style="height: 30px">
                <p class="text-48 text-white fw-light text-center"><small>Gaminger - Copyright 2022</small></p>
            </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

    <!-- <div class="footer">
        <div class="footer-right">
            <div>
                <img class="logo2" src="/css/imgs/Logo-GGr.png"></img>
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
            </div>
        </div>
        <div class="end-footer">
            <p class="end-footer-texte">Gaminger - Copyright 2022</p>
        </div>
    </div> -->


</body>

</html>