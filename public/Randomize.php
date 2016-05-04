<?php

function pageController() 
{
    $bodyParts = ["hearts", "livers", "arms", "brains", "hides", "spleens", "pancreases", "kidneys", "stomachs", "heads", "legs"];

    $adjectives = ["hearty", "strong", "lovely", "diseased", "spotty", "mutated", "fast", "slow", "angry", "cuddly", "unusual", "smelly", "adorable", "intelligent", "hideous", "cute"];

    $nouns = ["cows", "boars", "rats", "ogres", "rocs", "dragons", "dwarves", "gnomes", "goblins", "undead", "elves", "bears", "elves"];





}

//extract returns an array--both key and value--in this case the contents of $data.
    //this allows the 'scrollMsg' key in the $data variable to be accessed in the html like a variable,
    // which returns the value inside the php tags in the html.
extract(pageController());



?>