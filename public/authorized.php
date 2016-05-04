<?php

require_once '../Auth.php';
require_once '../Input.php';


function pageController()
{

   //check if session does not exist for user, redirect to login pg
    if(!Auth::check()) {
        header("Location: /login.php");
        die();
    }

    //need to return the variable above in order to grab the session user name
    Auth::user();
}

//CONTINUE session
session_start();

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Authorization</title>
</head>
<body>

<h1>Authorized</h1>
<p>Welcome <?=Auth::user();?></p>

<a href="/logout.php">Log Me Out</a>
  
</body>
</html>