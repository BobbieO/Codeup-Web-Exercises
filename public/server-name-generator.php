<?php

function randomize() 
{

    $adjectives = ["hearty", "strong", "lovely", "diseased", "spotty", "mutated", "fast", "slow", "angry", "cuddly", "unusual", "smelly", "adorable", "intelligent", "hideous", "cute"];

    $nouns = ["cows", "boars", "rats", "ogres", "rocs", "dragons", "dwarfs", "gnomes", "goblins", "undead", "elves", "bears", "fish"];

    //pick random index of adjectives array
    $randomAdj = array_rand($adjectives);

    // //pick random index of nouns arrays
    $randomNoun = array_rand($nouns);

    // //variables for holding the randomly generated adjective and noun values (to be inside function)
    $fetchAdj = $adjectives[$randomAdj];
    $fetchNoun = $nouns[$randomNoun];

    //to generate random number
    $number = rand(2, 100);
    
    //combine them with a space
    return $number . " " . $fetchAdj . " " . $fetchNoun;
}

//output to page, plug this into html
// echo(randomize());

?>

<!DOCTYPE html>
<html>
<head>
    <title>Random Quest Generator</title>
    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="/css/server-name-generator.css">

    <!-- font -->
    <link href="/font/koreanCalligraphy.ttf" rel="stylesheet" type="text/css">

</head>
<body id="background">
    <div class="container">
        <div>
            <h1 class="showMe text">Warrior, fetch me <?php echo (randomize());?>!</h1>
        </div>
        <div class="dialogue">
            <div>
                <p class="wizTalk text">We don't have time for menial tasks.</p>
            </div>

            <div></div>

            <div>
                <p class="warTalk text"></p>
            </div>
        </div>
        <div class="position">
            <div class="objects"><span class="wizard"><img src="/img/questWizard.png"></span></div>

            <div class="objects"><span class="miniScroll"><img src="/img/rolledScroll.png"></span></div>

            <div class="objects"><span class="warrior"><img src="/img/warrior.png"></span></div>
        </div>
    </div>
<script src="/js/jquery.js"></script>
<script src="/js/server-name-generator.js"></script>
</body>
</html>



