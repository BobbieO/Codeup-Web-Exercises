<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Basic Calculator</title>

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
                <a href="/weathermap.php"><i class="nav-arrow medium material-icons">navigate_before</i></a>
                <a href="/randomQuestGen.php"><i class="nav-arrow medium material-icons">navigate_next</i></a>
            </div>
            <h1>Basic Calculator</h1>
            <p>
                This calculator uses JavaScript and jQuery to complete basic addition, subtraction, multiplication, and division with whole number and decimals.
            </p>

            <p>
                A click listener event is attached to each button and operator in order to enter it into the correct field. A function determines if the decimal has been entered, preventing it from being entered multiple times in the same field. The C button clears all fields and resets the booleans in order to allow new input into the proper fields.
        </div>

        <div>
            <div class="container row">
                <div class="col s6 instrImg">
                <h3 class="center">Calculator Instructions</h2>
                    <ol>
                        <li>Click on a number to enter it into the left field.</li>
                        <li>Click on +, -, *, or / to enter an operator.</li>
                        <li>Click on another number to enter it into the right field.</li>
                        <li>Click on = to complete the calculation.</li>
                        <li>Click on C to clear the fields and start over.</li>
                    </ol>
                </div>
                <div class="col s6 instrImg">
                    <h3 class="center">Click to View</h3>
                    <div class="center">
                        <a href="http://bobbieo.github.io/calculator.html" target="_blank"><img src="/img/screenShotCalc.png"></a>
                    </div>
                </div>
            </div>
            <div class="center">
                <a class="linkColor" href="https://github.com/BobbieO/bobbieo.github.io/blob/master/calculator.html" target="_blank">View code on GitHub</a>
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