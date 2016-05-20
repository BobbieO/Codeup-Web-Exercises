<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Weather Map</title>

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
                <a href="/simpleSimon.php"><i class="nav-arrow medium material-icons">navigate_before</i></a>
                <a href="/basicCalculator.php"><i class="nav-arrow medium material-icons">navigate_next</i></a>
            </div>
            <h1>Weather Map</h1>
            <p>
                This is an interactive weather map using JavaScript and jQuery for function, and Bootstrap CSS for styling. The map integrates Google Maps API and Open Weather API together to retrieve the weather from any given location in the world.
            </p>

            <p>
                This map features a Google Map with a draggable marker. A listener event registers the latitutde and longitude of the end location of the marker, which is then used to gather the weather via the Open Weather API. The information is then dynamically displayed below the map. 
            </p>

            <p>
                This application is compatible with all screen sizes.
            </p>

        </div>

        <div>
            <div class="container row">
                <div class="col s6 instrImg">
                <h3 class="center">Map Instructions</h2>
                    <ol>
                        <li>Click and hold on the map marker.</li>
                        <li>Drag to the desired location.</li>
                        <li>The + and - will zoom the map in and out.</li>
                    </ol>
                </div>
                <div class="col s6 instrImg">
                    <h3 class="center">Click to View</h3>
                    <div class="center">
                        <a href="http://bobbieo.github.io/weather_map.html" target="_blank"><img src="/img/screenShotWeather.png"></a>
                    </div>
                </div>
                <div class="center">
                    <a class="linkColor" href="https://github.com/BobbieO/bobbieo.github.io/blob/master/weather_map.html" target="_blank">View code on GitHub</a>
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