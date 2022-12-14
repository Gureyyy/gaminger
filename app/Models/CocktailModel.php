<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

    Class CocktailModel extends Model{

        public static function createCocktail($name, $desc, $price, $picture){
            $query = 'INSERT INTO cocktail (`id`, `nom`, `description`, `image`, `prix`) VALUES (NULL,"%s", "%s", "%s", %e)';
            DB::insert(sprintf($query, $name, $desc, $picture, $price));
        }

        public static function getAllCocktails(){
            return DB::table('cocktail')->orderBy('prix', 'asc')->get('*');
        }

        public static function deleteCocktail($id){
            return DB::table('cocktail')->delete($id);
        }

        public static function getCocktailById($id){
            return DB::table('cocktail')->get('*')->where('id', $id);
        }

        public static function editCocktail($cocktail, $id){
            return DB::table('cocktail')->where('id', $id)-> update($cocktail);
        }
    }
