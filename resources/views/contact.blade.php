<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/26e46cf4bd.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="/css/imgs/Logo-GGr-icon.ico"/>
    <title>Gaminger - Contact</title>
    <link rel="stylesheet" href="/css/contact.css">
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
            <a href="events">Événements</a>
        </li>
        <li>
            <a href="contact" class="actif">Contact</a>
        </li>
        <li>
            <a href="admin">
                <i class="fa-solid fa-user" style="color: white;"></i>
            </a>
        </li>
    </ul><br><br>

    <h2 class="titre">Nous contacter</h2><br><br>

    <form class="contact">
        <div class="nom-prenom">
            <input class="nom" type="text" placeholder="NOM"></input><br><br>
            <input class="prenom" placeholder="Prénom"></input><br><br>
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
    </form><br><br><br>

    <hr><br><br>

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
                    <i class="adress1">Adresse : Rue du fun, 58000 NEVERS</i>
                </div>
                <div>
                    <i class="email1">Mail : gaminger@gmail.com</i>
                </div>
                <div>
                    <i class="phone-number1">Téléphone : 04.xx.xx.xx.xx</i>
                </div>
            </div>
        </div>
        <div class="image-coords">
            <div class="propriete-image-coords">
                <div>
                    <img class="img-maps" src="/css/imgs/maps.png"></img>
                </div>
            </div>
        </div>
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