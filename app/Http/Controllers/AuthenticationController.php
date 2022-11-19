<?php
namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;
use App\SqlQueries;

class Authentication
{
    
public function connect(){
        $login = $_POST['login'];
        $password = $_POST['passwd'];

        $user = DB::table('users')->get();
        if ($user){
            $passwd = $user[0] -> password;
            if (password_verify($password, $passwd)){
                session_start();
                $_SESSION['login'] = $user[0]->user;
                header('Location: /administrateur');
            }
            else{
                header('Location: /');
                exit();
            }
        }
    
    }
    public function logout(){
        session_start();
        unset($_SESSION['user']);
        header('Location: /');
        exit();
    }
}
?>