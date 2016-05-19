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

        if(!is_string($potentialString)) {
            throw Exception ('not a string');
        } else {
            return $potentialString;
        }   
    }

    public static function getNumber($key)
    {
        $potentialNumber = self::get($key);

        if(!is_int($potentialNumber)) {
            throw Exception ('not a number');
        } else {
            return settype($potentialNumber, "integer");
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



