<?php

function pageController()
{
    $userName = isset($_POST['username']) ? $_POST['username'] : ' ';
    $password = isset($_POST['password']) ? $_POST['password'] : ' ';

    // check to see if $_POST array is empty/if I submitted or not
    if(!empty($_POST)) {

        //if submitted==yes, and these conditions
        if($userName=="guest" && $password=="password") {
            header('Location: /authorized.php');
            die();
        } else {
            echo("Login Failed");
        }
    }

}

pageController();

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