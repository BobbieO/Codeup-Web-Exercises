<?php

function randomize() 
{

    $adjectives = ["hearty", "strong", "lovely", "diseased", "spotty", "mutated", "fast", "slow", "angry", "cuddly", "unusual", "smelly", "adorable", "intelligent", "hideous", "cute"];

    $nouns = ["cows", "boars", "rats", "ogres", "rocs", "dragons", "dwarfs", "gnomes", "goblins", "undead", "elves", "bears", "fish"];

    //pick random index of adjectives array
    $randomAdj = array_rand($adjectives);

    //pick random index of nouns arrays
    $randomNoun = array_rand($nouns);

    //this returns adjective (to be inside function)
    return $adjectives[$randomAdj];

    //combine them
    //output to page

}

var_dump(randomize());

?>
