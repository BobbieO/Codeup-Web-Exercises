<?php

//CONTINUE session
session_start();

function pageController()
{

   //check if session does not exist for user, redirect to login pg
    if(!isset ($_SESSION["logged_in_user"]) ) {
        header("Location: /login.php");
        die();
    }

    //need to return the variable above in order to grab the session user name
    return $_SESSION["logged_in_user"];
}

//assigning the pageController return result to a variable to call later
$logged_in_user = pageController();

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Authorization</title>
</head>
<body>

<h1>Authorized</h1>
<p>Welcome <?=$logged_in_user;?></p>

<a href="/logout.php">Log Me Out</a>
  
</body>
</html>