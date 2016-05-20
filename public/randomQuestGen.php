<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Random Quest Generator</title>

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
                <a href="/basicCalculator.php"><i class="nav-arrow medium material-icons">navigate_before</i></a>
            </div>
            <h1>Random Quest Generator</h1>
            <p>
                This is an interactive web page using PHP, JavaScript, and jQuery for function, and CSS for styling.
            </p>
            <p>
                This page features changing intro text to explain the task, using JavaScript and jQuery. A listener event registers the scroll click, which replaces the character and scroll images with a larger, open scroll image containing the php-generated random text. All text is hidden and revealed via JavaScript. A listener attached to the New Quest button reloads the page to begin the intro text again and generate a new random quest.
            </p>
        </div>

        <div>
            <div class="container row">
                <div class="col s6 instrImg">
                <h3 class="center">Instructions</h2>
                    <ol>
                        <li>Wait for the characters to finish talking.</li>
                        <li>Click the scroll to see your quest.</li>
                        <li>A random number of varied items will appear on the scroll.</li>
                        <li>Click New Quest to start again!</li>
                    </ol>
                </div>
                <div class="col s6 instrImg">
                    <h3 class="center">Click to View</h3>
                    <div class="center">
                        <a href="#" target="_blank"><img src="/img/screenShotRandQuest.png"></a>
                    </div>
                </div>
                <div class="center">
                    <a class="linkColor" href="#" target="_blank">View code on GitHub</a>
                </div>
            </div>
        </div>

    </main>
    <footer>
        <?php include 'footer.php' ?>
    </footer>

<script src="js/index.js"></script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>

</body>
</html>