<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/26e46cf4bd.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="/css/imgs/Logo-GGr-icon.ico"/>
    <title>Gaminger - Connexion Admin</title>
    <link rel="stylesheet" href="/css/admin.css">
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
            <a href="contact">Contact</a>
        </li>
        <li>
            <a href="admin"><i class="fa-solid fa-user" style="color: #efc09a;" class="actif"></i></a>
        </li>
    </ul>

    <form action="/administrateur" ACTION="POST" class="admin-connect">
        <div class="admin-box">
            <div>
                <h2 class="titre-connect">Administrateur</h2>
            </div>
            <div>
                    <div class="login-texte">
                        <label>Utilisateur :</label><br>
                    </div>
                    <input type="text" name="login" class="user" placeholder="Utilisateur">
                </div>

                <div>
                    <div class="mdp-texte">
                        <label class="mdp-texte">Mot de passe :</label><br>
                    </div>
                    <input type="password" name="password" class="mdp" placeholder="Mot de passe">
                </div>
                <div class="send">
                    <input type="submit" class="connect" type="submit" value="Connexion"></input>
                </div>
            </div>

    </form>






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