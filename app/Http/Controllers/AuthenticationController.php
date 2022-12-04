<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AuthenticationController
{
    
public function connect(){
    if(!isset($SESSION['login'])){
        $login = $_POST['login'];
        $password = $_POST['password'];

        $user = DB::table('user')->get('*')->where('user',$login);
        if ($user){
            $passwd = $user[0] -> password;
            if (password_verify($password, $passwd)){
                session_start();
                $_SESSION['login'] = $user[0]->user;
                return view('administrateur');
                }      
                else{
                    return view('accueil');
                }
            }
            else{
                return view('accueil');
            }
    }
    else{
        return view('administrateur');
    }
        
        }
    
    public function logout(){
        session_start();
        unset($_SESSION['login']);
        return redirect('/');
    }
}
?>