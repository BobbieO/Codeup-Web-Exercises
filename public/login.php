<?php

require_once 'functions.php';

//start session
session_start();

//give it an ID
$sessionId = session_id();

function pageController()
{
    $userName = inputHas('username') ? $_POST['username'] : ' ';
    $password = inputHas('password') ? $_POST['password'] : ' ';

    //check if sessions exists for user, redirect to Auth pg
    if(isset($_SESSION["logged_in_user"])) {
        header("Location: /authorized.php");
        die();
    }

    // check to see if $_POST array is empty/if I submitted or not
    if(!empty($_POST)) {

        //if submitted==yes, and these conditions
        if($userName=="guest" && $password=="password") {

            //assign session key logged-in-user to the username of the user
            $_SESSION["logged_in_user"] = $userName;

            //redirects
            header('Location: /authorized.php');

            //ends code exchange
            die();
        } else {
            echo("Login Failed");
        }
    }
}

pageController()

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>POST Requests Form</title>
</head>
<body>

    <form action="login.php" method="POST">
    
        <label>Username</label>
        <input type="text" name="username"><br>

        <label>Password</label>
        <input type="text" name="password"><br>

        <input type="submit">

    </form>

</body>
</html>