<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Recaptcha implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     * @param  mixed  $value
     * @return bool
     */
    public function passes($value)
    {
            $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 
                http_build_query(
                    array(
                        'secret' => env('GOOGLE_RECAPTCHA_SECRET'),
                        'response' => $_POST['g-recaptcha-response'],
                        'remoteip' => $_SERVER['REMOTE_ADDR']
                    )
                )
        );

        // receive server response ...
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec ($ch);

        curl_close ($ch);

        $recaptcha_result = json_decode($server_output, true);

        if(!empty($recaptcha_result['success'])) {
            return true;
        }
        else {
            return false;
        }
}

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Erreur lors de la validation du captcha';
    }
}
