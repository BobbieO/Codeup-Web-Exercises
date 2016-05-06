<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Wizard Vs Dragon</title>

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
            <h1>Wizard Vs Dragon</h1>
            <p>
                An interactive web page using JavaScript and jQuery for function, and CSS and Bootstrap to assist in styling.
            </p>

            <p>
                JavaScript and jQuery allow the page appearance to change when the correct code is entered on the start screen. When entered, the page view changes to a fantasy scene via Javascript and jQuery, and a short audio file plays to indicate success. Key codes tied to a keydown event allow for character movement and actions, the instructions for which are each displayed on the screen. A randomizer determines which character carries out the shooting event.
            </p>

            <p>
                The page is not mobile compatible.
            </p>
        </div>
        <div>
            <div class="container row">
                <div class="col s6 instrImg">
                <h3 class="center">Page Instructions</h2>
                    <ol>
                        <li>Enter the Konami Code to start.</li>
                        <li>If successful, a tone sounds and the scene changes.</li>
                        <li>Use the "a" and "d" keys to move the wizard.</li>
                        <li>Use the spacebar key to shoot.</li>
                        <li>Either the wizard or the dragon will shoot a fireball.</li>
                        <li>Someone explodes!</li>
                    </ol>
                </div>
                <div class="col s6 instrImg">
                    <h3 class="center">Click to View</h3>
                    <div class="center">
                        <a href="http://bobbieo.github.io/wizard.html" target="_blank"><img src="/img/screenShotWizard.png"></a>
                    </div>
                </div>
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