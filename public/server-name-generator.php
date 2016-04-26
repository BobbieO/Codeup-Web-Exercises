<?php

function randomize() 
{
    $bodyParts = ["hearts", "livers", "arms", "brains", "hides", "spleens", "pancreases", "kidneys", "stomachs", "heads", "legs"];

    $adjectives = ["hearty", "strong", "lovely", "diseased", "spotty", "mutated", "fast", "slow", "angry", "cuddly", "unusual", "smelly", "adorable", "intelligent", "hideous", "cute"];

    $nouns = ["cows", "boars", "rats", "ogres", "rocs", "dragons", "dwarves", "gnomes", "goblins", "undead", "elves", "bears", "elves"];

    // pick random index of parts array
    $randomPart = array_rand($bodyParts);

    //pick random index of adjectives array
    $randomAdj = array_rand($adjectives);

    // //pick random index of nouns arrays
    $randomNoun = array_rand($nouns);

    // //variables for holding the randomly generated adjective and noun values (to be inside function)
    $fetchPart = $bodyParts[$randomPart];
    $fetchAdj = $adjectives[$randomAdj];
    $fetchNoun = $nouns[$randomNoun];

    //to generate random number
    $number = rand(2, 50);
    
    //combine them with a space
    return $number . " " . $fetchPart . " from " . $fetchAdj . " " . $fetchNoun;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Random Quest Generator</title>
    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="/css/server-name-generator.css">

    <!-- font -->
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

</head>
<body id="background">
    <div class="container">

        <div class="dialogue">
            <!-- to output randomized stuff to proper spot on page -->
            <h1 class="showMe text">Fetch me <?= (randomize());?>!</h1>
                <p class="wizTalk text">We don't have time for menial tasks.</p>
        </div>

        <div class="position">
            <div class="objects"><span class="wizard"><img src="/img/questWizard.png"></span></div>

            <div class="objects"><span class="miniScroll"><img src="/img/rolledScroll.png"></span></div>

            <div class="objects"><span class="warrior"><img src="/img/warrior.png"></span></div>
        </div>

        <div id="attriBtn">
            <p class="small">Some images from Perfect World International, arc &#153</p>
            <button id="newQuest">New Quest</button>
        </div>

    </div>
<script src="/js/jquery.js"></script>
<script src="/js/server-name-generator.js"></script>
</body>
</html>



