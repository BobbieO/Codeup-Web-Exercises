<?php

require_once 'Log.php';

class Auth
{
    public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

    public static function attempt($username, $password)
    {
        if($username == 'guest' && $password == hashed password)
                Log("User {$username} logged in.");
        else {
            Log("User {$username} failed to log in!");
        }
        
    }

    public static function check()
    {

    }

    public static function user()
    {

    }

    public static function logout()
    {

    }



        Auth::attempt($username, $password)

        Auth::check()

        Auth::user()

        Auth::logout()








}


?>