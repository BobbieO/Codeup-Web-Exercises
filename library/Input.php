<?php

class Input
{
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        $requestCheck = isset($_REQUEST[$key]);
        return $requestCheck;
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    {
        if (self::has($key) == true) {
            return $_REQUEST[$key];
        } else {
            return null;
        }
    }

    public static function getString($key)
    {
        $potentialString = self::get($key);

        if(!is_string($potentialString) || is_numeric($potentialString)) {
            throw new Exception("Please enter text in {$key}.");
        } else {
            return $potentialString;
        }   
    }

    public static function getNumber($key)
    {
        $potentialNumber = self::get($key);

        if(!is_numeric($potentialNumber)) {
            throw new Exception("Please enter a numeric value in {$key}.");
        } 
            
            $findme = '.';
        
            if(strpos($potentialNumber, $findme) === false) 
            {
                return intval($potentialNumber);
            } else {
                return floatval($potentialNumber);
            }    
    }
    


    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}



