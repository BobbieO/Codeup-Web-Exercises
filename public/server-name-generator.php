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
</head>
<body>
    <div>
        <h1>Warrior, fetch me <?php echo (randomize());?>!</h1>
    </div>
    <div>
        <div class="king"></div>
        <div class="warrior"></div>
    </div>

</body>
</html>