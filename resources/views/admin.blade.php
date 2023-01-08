<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/26e46cf4bd.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="/css/imgs/Logo-GGr-icon.ico" />
    <title>Gaminger - Connexion Admin</title>
    <link rel="stylesheet" href="/css/admin.css">
    <link href="/fontawesome-free" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
            <img class="logo" src="/css/imgs/Logo-GGr.png">
            <a class="accueil" href="accueil">Accueil</a>
            <a href="cocktails">Cocktails</a>
            <a href="events">Événements</a>
            <a href="contact">Contact</a>
            <a class="menu" href="admin">
                <i class="fa-solid fa-user" style="color: #EFC09A;"></i>
            </a>
        </div>
    </header>
    <main>
        <section>

            <!-- <form action="/administrateur" method="POST" class="admin-connect">
        @csrf
        <div class="admin-box">
            <div>
                <h2 class="titre-connect">Administrateur</h2>
            </div>
            <div>
                <div class="login-texte">
                    <label>Utilisateur</label><br>
                </div>
                <input type="text" name="login" class="user" placeholder="Utilisateur">
            </div>

            <div>
                <div class="mdp-texte">
                    <label class="mdp-texte">Mot de passe</label><br>
                </div>
                <input type="password" name="password" class="mdp" placeholder="Mot de passe">
            </div><br>

            <div class="g-recaptcha" id="feedback-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}">
            </div>

            <div class="send">
                <input type="submit" class="connect" type="submit" value="Connexion"></input>
            </div>
        </div>

    </form> -->

            <h2 class="titre">Administrateur</h2>

            <form action="/administrateur" method="POST" class="admin-connect">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-25">
                            <label>Utilisateur</label><br>
                        </div>
                        <div class="col-75">
                            <input type="text" name="login" class="user" placeholder="Utilisateur">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label class="mdp-texte">Mot de passe</label><br>
                        </div>
                        <div class="col-75">
                            <input type="password" name="password" class="mdp" placeholder="Mot de passe">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-75">
                            <div class="g-recaptcha" id="feedback-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <input type="submit" class="connect" type="submit" value="Connexion"></input>
                    </div>
            </form>
            </div><br>

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
    <p class="end-footer">Gaminger - Copyright 2022<br><br></p> -->


</body>

</html>