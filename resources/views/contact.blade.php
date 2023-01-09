<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/26e46cf4bd.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="/css/imgs/Logo-GGr-icon.ico" />
    <title>Gaminger - Contact</title>
    <link rel="stylesheet" href="/css/contact.css">
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
            <a class="accueil" href="accueil">Accueil</a>
            <a href="cocktails">Cocktails</a>
            <a href="events">Événements</a>
            <a href="contact" class="actif">Contact</a>
            <a class="menu" href="admin">
                <i class="fa-solid fa-user" style="color: white;"></i>
            </a>
        </div>
    </header>

    <main>
        <section>
            <h2 class="titre">Nous contacter</h2>
            <!-- <form class="contact">
                <div class="nom-prenom">
                    <input class="nom" type="text" placeholder="NOM"></input>
                    <input class="prenom" placeholder="Prénom"></input>
                </div><br>
                <div class="mail-tel">
                    <input class="mail" type="email" placeholder="Mail">
                    <input class="tel" type="tel" placeholder="Téléphone" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" required>
                </div><br>
                <div class="mess">
                    <textarea class="message" placeholder="Détails de votre demande..."></textarea>
                </div><br>
                <div class="send">
                    <input class="envoyer" type="submit" value="Envoyer"></input>
                </div>
            </form> -->

            <form>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <label for="pname">Prénom</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="pname" name="firstname" placeholder="Votre prénom...">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="nname">Nom</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="nname" name="lastname" placeholder="Votre nom...">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="mname">Mail</label>
                        </div>
                        <div class="col-75">
                            <input id="mail" type="email" name="mail" placeholder="Votre mail...">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="tname">Téléphone</label>
                        </div>
                        <div class="col-75">
                            <input id="tel" type="tel" placeholder="Téléphone" name="phone" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="msgname">Votre message</label>
                        </div>
                        <div class="col-75">
                            <textarea id="message" name="detail_message" placeholder="Détails de votre demande..." style="height:200px"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" value="Envoyer">
                    </div>
            </form>
            </div><br><br>

            <hr>

            <div class="global-coords">
                <div class="coords">
                    <div class="icons-coords">
                        <div class="icon1">
                            <i class="fa-sharp fa-solid fa-location-dot pin1"></i>
                        </div>
                        <div class="icon2">
                            <i class="fa-solid fa-envelope envelop1"></i>
                        </div>
                        <div class="icon3">
                            <i class="fa-solid fa-phone phone1"></i>
                        </div>
                    </div>
                </div>
                <div class="texte-coords">
                    <div class="info-texte-coords">
                        <div>
                            <i class="adress1"><b>Adresse :</b> Rue du fun, 58000 NEVERS</i>
                        </div>
                        <div>
                            <i class="email1"><b>Mail :</b> contact@gaminger.ovh</i>
                        </div>
                        <div>
                            <i class="phone-number1"><b>Téléphone :</b> 03.86.xx.xx.xx</i>
                        </div>
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