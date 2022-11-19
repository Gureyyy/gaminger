<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;
use App\SqlQueries;
use App\Models\CocktailModel;
use Illuminate\Http\Request;

class CocktailController
{
    public function getAllCocktails(){
        $cocktails = CocktailModel::getAllCocktails();
        return view ('cocktails', compact('cocktails'));
    }

    public function editCocktail($cocktail){

    }

    public function deleteCocktail($id){

    }

    public function createCocktail(Request $request){
        //Donnees recuperees depuis le formulaire
        $name = $_POST['name'];
        $desc = $_POST['description'];
        $price = $_POST['price'];
        $file = $_FILES['picture']['tmp_name'];
        $fileName = $_FILES['picture']['name'];

        $destinationPath = "C:\laragon\www\gaminger\public\uploads\\";
        move_uploaded_file($file,$destinationPath.$fileName);

        //Creation de l'objet cocktail et appel du model
       CocktailModel::createCocktail($name, $desc, $price, $fileName);
        return view('createCocktail');   
    }

}

?>