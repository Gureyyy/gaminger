<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/css/imgs/Logo-GGr-icon.ico" />
    <link rel="stylesheet" href="/css/createEvent.css">
    <title>Gaminger - Ajouter un événement</title>
</head>

<body>
    <div class="partie-create">
        <div class="div-gauche-create">
        </div>

        <div class="create">
            <h2>Ajouter un événement :</h2>
        </div>
        <div class="formulaire">
            <form class="composition" action="/administrateur/createEvent" method="POST" enctype="multipart/form-data">
                @csrf
                <input class="image-event" name="picture" type="file" name="picture-event"></input><br><br>
                <input class="titre-event" name="nom" type="text" placeholder="Nom de l'événement..."></input><br><br>
                <input class="date-event" name="date" type="date" name="date"></input><br><br>
                <textarea class="description-event"  name="description" placeholder="Description de l'événement..."></textarea><br><br>
                <input class="ajouter" type="submit" value="Envoyer"></input>
            </form>
            <a href="/administrateur">
                 <button class="retour" type="button">Retour</button>
            </a>
        </div>

        <div class="div-droite-create">
        </div>
    </div>
</body>

</html>