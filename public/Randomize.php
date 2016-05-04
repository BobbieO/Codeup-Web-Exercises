<?php

Class Randomize 
{
    public static $bodyParts = ["hearts", "livers", "arms", "brains", "hides", "spleens", "pancreases", "kidneys", "stomachs", "heads", "legs"];

    public static $adjectives = ["hearty", "strong", "lovely", "diseased", "spotty", "mutated", "fast", "slow", "angry", "cuddly", "unusual", "smelly", "adorable", "intelligent", "hideous", "cute"];

    public static $nouns = ["cows", "boars", "rats", "ogres", "rocs", "dragons", "dwarves", "gnomes", "goblins", "undead", "elves", "bears", "elves"];

    //functions to be used in later function to create the phrase
    public static function fetchPart()
    {
        // pick random index of parts array
        $randomPart = array_rand(self::$bodyParts);

        //to return the value at that index
        return self::$bodyParts[$randomPart];
    }

    public static function fetchAdj()
    {
        //pick random index of adjectives array
        $randomAdj = array_rand(self::$adjectives);

        //to return the value at that index
        return self::$adjectives[$randomAdj];    
    }

    public static function fetchNoun()
    {
        // //pick random index of nouns arrays
        $randomNoun = array_rand(self::$nouns);

        //to return the value
        return self::$nouns[$randomNoun];
    }

    public static function generatePhrase()
    {
        //to generate random number
        $number = rand(2, 50);
        
        //holds contatenated message in a data variable as an array with key of scrollMsg and value of the entire message.
        return $number . " " . self::fetchPart() . " from " . self::fetchAdj() . " " . self::fetchNoun();
    }

}


?>