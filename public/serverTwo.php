<?php

include 'Randomize.php';



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

    //to put message array into
    $data = array();
    
    //holds contatenated message in a data variable as an array with key of scrollMsg and value of the entire message.
    $data = [
        'scrollMsg' => $number . " " . $fetchPart . " from " . $fetchAdj . " " . $fetchNoun
    ];

    //return the variable
    return $data;
}

//extract returns an array--both key and value--in this case the contents of $data.
    //this allows the 'scrollMsg' key in the $data variable to be accessed in the html like a variable,
    // which returns the value inside the php tags in the html.
extract(pageController());

?>