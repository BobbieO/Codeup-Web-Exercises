<?php

function pageController()
{ 
    $count = !isset($_GET['count']) ? 0 : $_GET['count'];
    return ['count' => $count];
}

extract(pageController());

$rand = rand(1, 50);

if ($rand % 6 == 0) {
        $count = 0;
    } else {
        $count += 1;
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <title>Pong's Ping Pong</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="/css/pingpong.css">
</head>
<body>

<div class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div>
                <h1 class="text">Ping Pong</h1>
            </div>
            <div>
                <h2 class="text">Score: <?= $count ?></h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 text-center">
            <a href="pong.php?count=<?= $count ?>">HIT</a>
            <a href="pong.php?count=<?= $count ?>">MISS</a>
        </div>
    </div>

</div>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>
</html>