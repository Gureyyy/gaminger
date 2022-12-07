<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des événements</title>
    <link rel="stylesheet" href="/css/list-events.css">
    <script src="https://kit.fontawesome.com/26e46cf4bd.js" crossorigin="anonymous"></script>
    <link href="/fontawesome-free" rel="stylesheet">
    <link rel="shortcut icon" href="/css/imgs/Logo-GGr-icon.ico" />
</head>

<body>
    <div class="nos-menus">
        @if (isset($events))
        @foreach ($events as $event)
        <div class="nos-events">
            <img src='/uploads/{{$event -> image}}'><br>
            <p><span style="font-weight: bold">{{$event->nom}}</span>

                <br>{{date('d/m/Y', strtotime($event->date))}}
                <br>{{$event->description}}
            </p><br>
            <a href="/administrateur/event/{{$event->id}}">
                <button>Modifier cet événement</button>
            </a>
            <a href="/administrateur/event/delete/{{$event->id}}">
                <i style="color: white" class="fa-solid fa-trash trash"></i>
            </a>
        </div>
        @endforeach
        @else
        <div>Aucun événement de créé</div>
        @endelse
        @endif
    </div>
    <a href="/administrateur">
        <button class="retour" type="button">Retour</button>
    </a>
</body>

</html>