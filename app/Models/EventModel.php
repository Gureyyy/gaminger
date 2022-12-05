<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

    Class EventModel extends Model{

        public static function createevent($event){
            return DB::table('events')->insert($event);
        }

        public static function getAllevents(){
            return DB::table('events')->orderBy('date')->get('*');
        }

        public static function deleteevent($id){
            return DB::table('events')->delete($id);
        }

        public static function geteventById($id){
            return DB::table('events')->get('*')->where('id', $id);
        }

        public static function editevent($event, $id){
            return DB::table('events')->where('id', $id)-> update($event);
        }
        
    }