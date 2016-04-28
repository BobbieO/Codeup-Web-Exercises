<?php

//CONTINUE session
session_start();

function clearSession()
{
    // clear $_SESSION array
    session_unset();

    // delete session data on the server and send the client a new cookie
    session_regenerate_id(true);  

    //redirect to login page
    //check if session does not exist for user, redirect to login pg
    header("Location: /login.php");
    die();
}

clearSession();

?>


<!DOCTYPE html>
<html>
<head>
    <title>Log Out</title>
</head>
<body>

</body>
</html>