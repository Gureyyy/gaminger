<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Rules\Recaptcha;

class AuthenticationController
{
    
public function connect(){

    if(!isset($SESSION['login'])){
        $login = $_POST['login'];
        $password = $_POST['password'];

        $user = DB::table('user')->get('*')->where('user',$login);
        if (isset($user[0]) && $login != '' && $password != '' ){
            $login = $user[0]->user;
            $passwd = $user[0] -> password;
            $recaptcha = new Recaptcha();
            if (password_verify($password, $passwd) && $recaptcha->passes(['g-recaptcha-response' => 'required'])){
                session_start();
                $_SESSION['login'] = $login;
                Log::info("Connexion réussie pour l'utilisateur .",['login' => $login]);
                return view('administrateur');
                }      
                else{
                    Log::info("Connexion échouée pour l'utilisateur .", ['login' => $login]);
                    return redirect('/admin?error=wrong-password');
                }
            }
            else{
                return redirect('/admin?error=wrong-password');
            }
    }
    else{
        return redirect('/administrateur');
    }
        
        }
    
    public function logout(){
        session_start();
        unset($_SESSION['login']);
        return redirect('/');
    }
}
?>