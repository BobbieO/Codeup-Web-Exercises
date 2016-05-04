<?php

require_once '../Input.php';
require_once '../Auth.php';

//CONTINUE session
session_start();

    Auth::logout();

    //redirect to login page
    //check if session does not exist for user, redirect to login pg
    header("Location: /login.php");
    die();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Log Out</title>
</head>
<body>

</body>
</html>