<?php

require_once '../Auth.php';
require_once '../Input.php';

function pageController()
{
    $username = Input::has('username') ? Input::get('username') : ' ';
    $password = Input::has('password') ? Input::get('password') : ' ';

    //check if sessions exists for user, redirect to Auth pg
    if(Auth::check()) {
        header("Location: /authorized.php");
        die();
    }

    $message = 'Please Log In';

    // check to see if $_POST array is empty/if I submitted or not
    if(!empty($_POST)) {

        //if submitted==yes, and these conditions
        if(Auth::attempt($username, $password)) {

            //redirects
            header('Location: /authorized.php');

            //ends code exchange
            die();
        } else {
            $message = "Login Failed";
        }

    }
        return['message' => $message];
}

//start session
session_start();

//give it an ID
$sessionId = session_id();

extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>POST Requests Form</title>
</head>
<body>

    <p><?=$message;?></p>

    <form action="login.php" method="POST">
    
        <label>Username</label>
        <input type="text" name="username"><br>

        <label>Password</label>
        <input type="text" name="password"><br>

        <input type="submit">

    </form>

</body>
</html>