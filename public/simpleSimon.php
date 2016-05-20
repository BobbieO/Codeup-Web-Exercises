<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Simple Simon</title>

    <!-- font -->
    <link href='https://fonts.googleapis.com/css?family=Vidaloka' rel='stylesheet' type='text/css'>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

    <!-- menu arrow icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="/css/index.css">

</head>
<body>
    <header>
        <?php include 'navbar.php' ?>
    </header>

    <main>
        <div class="center container">
            <div class="right">
                <a href="/catchabutterfly.php"><i class="nav-arrow medium material-icons">navigate_before</i></a>
                <a href="/weathermap.php"><i class="nav-arrow medium material-icons">navigate_next</i></a>
            </div>
            <h1>Simple Simon</h1>
            <p>
                A basic simple simon game using JavaScript and jQuery for function, and Bootstrap CSS for styling.
            </p>

            <p>
                This game features a randomizer for fadeOut-fadeIn functions to illustrate which element is selected. A listener event registers user selection, which is then checked against the game selection. If it matches, a jQuery statement is generated to affirm success and to count game repetitions. If the user errors, a fail statement is generated. The start button functions as both game start, and as a game restart which clears the field.
            </p>

            <p>
                This game is compatible with all screen sizes.
            </p>
        </div>

        <div>
            <div class="container row">
                <div class="col s6 instrImg">
                <h3 class="center">Game Instructions</h2>
                    <ol>
                        <li>Click "Start" to begin.</li>
                        <li>A petal will flash.</li>
                        <li>Click on the same petal. If successful, the game will select another random petal to add on to the end of the sequence.</li>
                        <li>Your objective is to recall and mimic the pattern the game selects.</li>
                        <li>The game will keep track of the number of rounds you are successful. This is displayed in the top right corner.</li>
                        <li>If you miss any element of the pattern, the game will stop.</li>
                        <li>Click the Start button to try again.</li>
                    </ol>
                </div>
                <div class="col s6 instrImg">
                    <h3 class="center">Click to Play</h3>
                    <div class="center">
                        <a href="http://bobbieo.github.io/simpleSimon.html" target="_blank"><img src="/img/screenShotSimon.png"></a>
                    </div>
                </div>
            </div>
            <div class="center">
                <a class="linkColor" href="https://github.com/BobbieO/bobbieo.github.io/blob/master/simpleSimon.html" target="_blank">View code on GitHub</a>
            </div>
        </div>


    </main>

    <footer>
        <?php include 'footer.php' ?>
    </footer>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="js/index.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>

</body>
</html>