<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Basic Ping Pong</title>

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
            <h1>Basic Ping Pong</h1>
            <p>A duo of pages made to demonstrate basic php functionality.</p>

            <p>
                A counter was added to provide a visual feedback of the page swapping. A randomizer was added to reset the count to zero as a "miss".
            </p>
        </div>
        
        <div>
            <div class="container row">
                <div class="col s6 instrImg">
                <h3 class="center">Instructions</h2>
                    <ol>
                        <li>Click HIT to hit the imaginary ball and swap to the matched php page.</li>
                        <li>The counter will increase by one if your hit was successful.</li>
                        <li>A miss will reset the counter back to zero.</li>
                        <li>Click HIT again to restart.</li>
                        <li>MISS will also reset back to zero</li>
                    </ol>
                </div>
                <div class="col s6 instrImg">
                    <h3 class="center">Click to View</h3>
                    <div class="center">
                        <a href="#" target="_blank"><img src="#"></a>
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