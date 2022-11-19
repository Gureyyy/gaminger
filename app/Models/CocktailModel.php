<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

    Class CocktailModel extends Model{

        public static function createCocktail($name, $desc, $price, $picture){
            $query = 'INSERT INTO cocktail (`nom`, `description`, `image`, `prix`) VALUES ("%s", "%s", "%s", %e)';
            DB::insert(sprintf($query, $name, $desc, $picture, $price));
        }

        public static function getAllCocktails(){
            return DB::table('cocktail')->get('*');
        }

    }
