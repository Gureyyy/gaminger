<?php
namespace App\Http\Controllers;

use App\Models\EventModel;
use Illuminate\Support\Facades\Log;

class EventController
{

    public function getAllevents(){
        $events = EventModel::getAllevents();
        return view ('events', compact('events'));
    }
    public function getAllEventsForEdit(){
        $events = EventModel::getAllevents();
        return view ('list-events', compact('events'));
    }

    public function editEvent(){
        session_start();
        if(isset($_SESSION['login'])){
            $id = $_POST['id'];
            $name = $_POST['nom'];
            $desc = $_POST['description'];
            $date = $_POST['date'];
            if (UPLOAD_ERR_OK === $_FILES["image"]["error"])
            {
                $file = $_FILES['image']['tmp_name'];
                $picture= $_FILES['image']['name'];
                if(file_exists('C:\laragon\www\gaminger\public\uploads\\'.$picture)) {
                    chmod('C:\laragon\www\gaminger\public\uploads\\'.$picture,0755); //Change the file permissions if allowed
                    unlink('C:\laragon\www\gaminger\public\uploads\\'.$picture); //remove the file
                }
                $destinationPath = "C:\laragon\www\gaminger\public\uploads\\";
                move_uploaded_file($file,$destinationPath.$picture);
                $event['image'] = $picture;
            }
            else{
                $picture = "";
                $eventPicture = EventModel::geteventById($id);
                foreach($eventPicture as $element){
                    $picture = $element -> image;
                }
                $event['image'] = $picture;
            }

            $event['nom'] = $name;
            $event['description'] = $desc;
            $event['date'] = $date;
            eventModel::editevent($event, $id);
            Log::info('Edition de l\'event id : .', ['id' => $id]);
            return view('administrateur');
        }
        else{
            return view('accueil');
        }

    }

    public function deleteevent($id){
        session_start();
        if(isset($_SESSION['login'])){
        EventModel::deleteevent($id);
        Log::info('Suppression de l\'event id : .', ['id' => $id]);
        return view('administrateur');
        }
        else{
            return view('accueil');
        }

    }
    public function getEventById($id){
        session_start();
        if(isset($_SESSION['login'])){
        $eventById = EventModel::geteventById($id);
        $eventById = json_decode($eventById, true);
        $event = [];
        foreach($eventById as $element)
        {
            $event['id'] = $element['id'];
            $event['name'] = $element['nom'];
            $event['date'] = $element['date'];
            $event['desc'] = $element['description'];
        }

        Log::info('Obtation des details de l\'event id : .', ['id' => $id]);
        return view('editevent', compact('event'));
        }
        else{
            return view('accueil');
        }

    }

    public function createevent(){
        session_start();
        if(isset($_SESSION['login'])){
        //Donnees recuperees depuis le formulaire
        $event = [];
        $event['nom'] = $_POST['nom'];
        $event['description'] = $_POST['description'];
        $event['date'] = $_POST['date'];
        $event['image'] = $_FILES['picture']['name'];
        $fileName = $_FILES['picture']['tmp_name'];

        if(file_exists('C:\laragon\www\gaminger\public\uploads\\'.$fileName)) {
            chmod('C:\laragon\www\gaminger\public\uploads\\'.$fileName,0755); //Change the file permissions if allowed
            unlink('C:\laragon\www\gaminger\public\uploads\\'.$fileName); //remove the file
        }

        $destinationPath = "C:\laragon\www\gaminger\public\uploads\\";
        move_uploaded_file($fileName,$destinationPath.$event['image']);

        Log::info('Création de l\'event id : .', ['name' => $event['name']]);

        //Creation de l'objet event et appel du moodel
       EventModel::createevent($event);
        return view('createevent');
        }
        else{
            return view('accueil');
        }   
    }

}

?>