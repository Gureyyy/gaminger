<?php
namespace App\Http\Controllers;

use App\Models\CocktailModel;
use Illuminate\Http\Request;

class CocktailController
{
    public function getAllCocktails(){
        $cocktails = CocktailModel::getAllCocktails();
        return view ('cocktails', compact('cocktails'));
    }
    public function getAllCocktailsForEdit(){
        $cocktails = CocktailModel::getAllCocktails();
        return view ('list-cocktails', compact('cocktails'));
    }

    public function editCocktail(Request $request){
        session_start();
        if(isset($_SESSION['login'])){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $desc = $_POST['description'];
            $price = $_POST['price'];
            if (isset($_FILES['image']))
            {
                $file = $_FILES['image']['tmp_name'];
                $picture= $_FILES['image']['name'];
                if(file_exists('C:\laragon\www\gaminger\public\uploads\\'.$picture)) {
                    chmod('C:\laragon\www\gaminger\public\uploads\\'.$picture,0755); //Change the file permissions if allowed
                    unlink('C:\laragon\www\gaminger\public\uploads\\'.$picture); //remove the file
                }
                $destinationPath = "C:\laragon\www\gaminger\public\uploads\\";
                move_uploaded_file($file,$destinationPath.$picture);
                $cocktail['image'] = $picture;
            }
            else{
                $picture = "";
                $cocktailPicture = CocktailModel::getCocktailById($id);
                foreach($cocktailPicture as $element){
                    $picture = $element -> image;
                }
                $cocktail['image'] = $picture;
            }

            $cocktail['nom'] = $name;
            $cocktail['description'] = $desc;
            $cocktail['prix'] = $price;
            CocktailModel::editCocktail($cocktail, $id);

            return view('administrateur');
        }
        else{
            return view('accueil');
        }

    }

    public function deleteCocktail($id){
        session_start();
        if(isset($_SESSION['login'])){
        CocktailModel::deleteCocktail($id);
        return view('administrateur');
        }
        else{
            return view('accueil');
        }

    }
    public function getCocktailById($id){
        session_start();
        if(isset($_SESSION['login'])){
        $cocktailById = CocktailModel::getCocktailById($id);
        $cocktailById = json_decode($cocktailById, true);
        $cocktail = [];
        foreach($cocktailById as $element)
        {
            $cocktail['id'] = $element['id'];
            $cocktail['name'] = $element['nom'];
            $cocktail['price'] = $element['prix'];
            $cocktail['desc'] = $element['description'];
        }
       
        return view('editCocktail', compact('cocktail'));
        }
        else{
            return view('accueil');
        }

    }

    public function createCocktail(Request $request){
        session_start();
        if(isset($_SESSION['login'])){
        //Donnees recuperees depuis le formulaire
        $name = $_POST['name'];
        $desc = $_POST['description'];
        $price = $_POST['price'];
        $file = $_FILES['picture']['tmp_name'];
        $fileName = $_FILES['picture']['name'];

        if(file_exists('C:\laragon\www\gaminger\public\uploads\\'.$fileName)) {
            chmod('C:\laragon\www\gaminger\public\uploads\\'.$fileName,0755); //Change the file permissions if allowed
            unlink('C:\laragon\www\gaminger\public\uploads\\'.$fileName); //remove the file
        }

        $destinationPath = "C:\laragon\www\gaminger\public\uploads\\";
        move_uploaded_file($file,$destinationPath.$fileName);

        //Creation de l'objet cocktail et appel du model
       CocktailModel::createCocktail($name, $desc, $price, $fileName);
        return view('createCocktail');
        }
        else{
            return view('accueil');
        }   
    }

}

?>