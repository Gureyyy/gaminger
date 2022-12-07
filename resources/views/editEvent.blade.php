<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/css/imgs/Logo-GGr-icon.ico" />
    <link rel="stylesheet" href="/css/editEvent.css">
    <title>Gaminger - Modifier un événement</title>
</head>

<body>
    <div class="partie-edit">
        <div class="div-gauche-edit">
        </div>

        <div class="edit">
            <h2>Modifier un événement :</h2>
        </div>
        <div class="formulaire">
            <form class="composition" action="/administrateur/editEvent" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{$event['id']}}" name="id" />
                <input class="image-event" name="image" type="file" name="picture-event"></input><br><br>
                <input class="titre-event" name="nom" type="text" value="{{$event['name']}}" placeholder="Nom de l'événement..."></input><br><br>
                <input class="date-event" name="date" type="date" value="{{$event['date']}}" name="date"></input><br><br>
                <textarea class="description-event" name="description" placeholder="Description de l'événement...">{{$event['desc']}}</textarea><br><br>
                <input class="ajouter" type="submit" value="Enregistrer"></input>
            </form>
            <a href="/administrateur">
                 <button class="retour" type="button">Retour</button>
            </a>
        </div>

        <div class="div-droite-edit">
        </div>
    </div>
</body>

</html>