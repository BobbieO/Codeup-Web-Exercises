<?php

require_once 'Log.php';

class Auth
{
    public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

    //to check if username and pass is correct
    public static function attempt($username, $password)
    {
        //generate new instance of Log
        $Log = new Log;

        //if pass and user both correct, log success alert
        if($username == 'guest' && $password == password_verify($password)) {
            $Log->info("User {$username} logged in.");

        //if not, log error alert
        } else {
            $Log->error("User {$username} failed to log in!");
        }    
    }

    //to check if user is logged in already
    public static function check()
    {
        if(isset($_SESSION["logged_in_user"])) {
            return true;
        } else {
            return false;
        }
    }

    //to return username
    public static function user()
    {
        return $_SESSION["logged_in_user"];
    }

    //to log out/cease functions
    public static function logout()
    {
        // clear $_SESSION array
        session_unset();

        // delete session data on the server and send the client a new cookie
        session_regenerate_id(true);  
    }



        Auth::attempt($username, $password)

        Auth::check()

        Auth::user()

        Auth::logout()








}


?>